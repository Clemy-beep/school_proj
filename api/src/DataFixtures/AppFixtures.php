<?php

namespace App\DataFixtures;

use App\Entity\Body;
use App\Entity\Bus;
use App\Entity\Child;
use App\Entity\Driver;
use App\Entity\Guardian;
use App\Entity\Route;
use App\Entity\Seat;
use App\Entity\User;
use App\Entity\Wheel;
use App\Entity\Window;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();

        $wheels = [];
        for ($i = 0; $i < 6; $i++) {
            $wheel = new Wheel();
            $wheel->setPressure(2)->setDiameter(80);
            array_push($wheels, $wheel);
            $manager->persist($wheel);
        }

        $windows = [];
        for ($b = 0; $b < 10; $b++) {
            $window = new Window();
            $window->setThickness(20)->setWeight(20);
            array_push($windows, $window);
            $manager->persist($window);
        }

        $seats = [];
        for ($seatsCount = 0; $seatsCount < 30; $seatsCount++) {
            $seat = new Seat();
            $seat->setColor($faker->safeColorName);
            array_push($seats, $seat);
            $manager->persist($seat);
        }

        $body = new Body();
        $body->setWeight(200)->setColor($faker->safeColorName);

        $bus = new Bus();
        $bus->setPlateNum($faker->ean8)->setServiceDate(new DateTime('1979-06-09'))->setWeight(2000)->setBody($body);

        foreach ($windows as $key => $wi) {
            $bus->addWindow($wi);
        }
        foreach ($wheels as $key => $wh) {
            $bus->addWheel($wh);
        }
        foreach ($seats as $key => $s) {
            $bus->addSeat($s);
        }

        $guardians = [];
        for ($guardiansCount = 0; $guardiansCount < 15; $guardiansCount++) {
            $guardian = new Guardian();
            $guardianpwd = $this->encoder->hashPassword($guardian, "123");
            $guardian->setRoles(['ROLE_USER', 'ROLE_PARENT'])->setEmail($faker->email)->setPassword($guardianpwd)->setFirstname($faker->firstname)->setLastname($faker->lastname)->setAge(rand(15, 19))->setGender(rand(0, 2));
            $guardian->setPhone($faker->unixTime);
            array_push($guardians, $guardian);
            $manager->persist($guardian);
        }

        $children = [];
        for ($childrenCount = 0; $childrenCount < 30; $childrenCount++) {
            $guardianKey = array_rand($guardians);
            $guardian = $guardians[$guardianKey];
            $child = new Child();
            $hashpwd = $this->encoder->hashPassword($child, '123');
            $child->setRoles(['ROLE_USER', 'ROLE_CHILD'])->setEmail($faker->email)->setPassword($hashpwd)->setFirstname($faker->firstname)->setLastname($faker->lastname)->setAge(rand(15, 19))->setGender(rand(0, 2));
            $child->setGuardian($guardian);
            array_push($children, $child);
            $manager->persist($child);
        }

        $driver = new Driver();
        $driverpwd = $this->encoder->hashPassword($driver, '123');
        $driver->setRoles(['ROLE_USER', 'ROLE_DRIVER'])->setEmail($faker->email)->setPassword($driverpwd)->setFirstname($faker->firstname)->setLastname($faker->lastname)->setAge(rand(15, 19))->setGender(rand(0, 2));
        $driver->setDrivingLicence($faker->ean8);
        $manager->persist($driver);
        // $product = new Product();
        // $manager->persist($product);
        $admin = new User();
        $admin->setRoles(['ROLE_USER', 'ROLE_ADMIN'])->setEmail('admin@example.com')->setPassword($driverpwd)->setFirstname('Clementine')->setLastname('Digny')->setAge(27)->setGender(1);
        $manager->persist($admin);

        $route = new Route();
        $route->setDriver($driver)->setBus($bus)->setRouteDateTime(new DateTime("2014-02-25 08:37:17"));
        foreach ($children as $key => $c) {
            $route->addChild($c);
        }
        $manager->persist($route);

        $manager->flush();
    }
}
