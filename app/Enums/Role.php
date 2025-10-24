<?php

namespace App;

enum Role : string
{
    case PATIENT = 'patient';
    case COMPANION = 'companion';
    case MEDICAL_ASSISTANT = 'medical_assistant';
    case NURSE = 'nurse';
    case DOCTOR = 'doctor';
}
