<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ShowHidePasswordType extends AbstractType
{
    public function getParent()
    {
        return PasswordType::class;
    }
}
