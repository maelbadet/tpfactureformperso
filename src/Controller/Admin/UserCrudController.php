<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username'),
            ChoiceField::new('roles')
            ->setChoices([
                'admin' => 'ROLE_ADMIN',
                'manager' => 'ROLE_MANAGER',
                'user' => 'ROLE_USER'
            ])
            ->allowMultipleChoices()
        ];
    }
}
