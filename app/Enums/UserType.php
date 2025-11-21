<?php

namespace App\Enums;

enum UserType : string
{
    case PATIENT = 'patient';
    case COMPANION = 'companion';
    case MEDICAL_ASSISTANT = 'medical_assistant';
    case NURSE = 'nurse';
    case DOCTOR = 'doctor';
}
