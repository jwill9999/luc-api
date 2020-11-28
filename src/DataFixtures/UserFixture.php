<?php


namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\UserPassportInterface;

class UserFixture extends Fixture
{
    /**
     * @var UserPassportInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@test.com');
        $user->setUsername('user');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->encoder->encodePassword($user, 'password'));

        $manager->persist($user);
        $manager->flush();
    }
}
