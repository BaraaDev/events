<?php

return [
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message name
    ///////////////////////////////////////////////////////////////////////////////////////
    'name_required'                   => 'Il est requis de compléter le champ correspondant au nom.',
    'name_min'                        => "La longueur du texte du champ de nom doit être d'au moins 3 caractères/caractère.",
    'name_max'                        => 'La longueur du texte du champ de nom ne doit pas dépasser 199 caractères/caractères.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message username
    ///////////////////////////////////////////////////////////////////////////////////////
    'username_required'               => "Le champ nom d'utilisateur est obligatoire.",
    'username_min'                    => "La longueur du texte du champ nom d'utilisateur doit être d'au moins 3 caractères/caractère.",
    'username_max'                    => "La longueur du texte du champ nom d'utilisateur ne doit pas dépasser 199 caractères/caractères.",
    'username_unique'                 => "La valeur du nom d'utilisateur est déjà utilisée.",
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message phone
    ///////////////////////////////////////////////////////////////////////////////////////
    'phone_required'                  => 'The phone field is required.',
    'phone_numeric'                   => 'The phone must be a number.',
    'phone_digits'                    => 'The phone must be 11 digits.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message whatsApp
    ///////////////////////////////////////////////////////////////////////////////////////
    'whatsApp_required'          => 'The whatsApp field is required.',
    'whatsApp_numeric'           => 'The whatsApp must be a number.',
    'whatsApp_digits'            => 'The whatsApp must be 14 digits.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message email
    ///////////////////////////////////////////////////////////////////////////////////////
    'email_required'                  => 'The email field is required.',
    'email_min'                       => 'The text length of the email field must be at least 3 characters/character.',
    'email_max'                       => 'The text length of the email field must not exceed 255 characters/characters.',
    'email_unique'                    => 'The email value is already in use.',
    'email_email'                     => 'The email field must be a valid email address.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message bio
    ///////////////////////////////////////////////////////////////////////////////////////
    'bio_max'                         => 'The text length of the bio field must not exceed 255 characters/characters.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message gender
    ///////////////////////////////////////////////////////////////////////////////////////
    'gender_in'                       => 'The selected gender is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message gender
    ///////////////////////////////////////////////////////////////////////////////////////
    'dob_date'                        => 'The date of birth is not a valid date.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message address
    ///////////////////////////////////////////////////////////////////////////////////////
    'address_max'                     => 'The text length of the home address field must not exceed 255 characters/characters.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message postal code
    ///////////////////////////////////////////////////////////////////////////////////////
    'postal_code_numeric'             => 'The postal code must be a number.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message name
    ///////////////////////////////////////////////////////////////////////////////////////
    'name_ar_required'                => 'Le champ du nom arabe est obligatoire!',
    'name_ar_min'                     => "La longueur du texte du champ du nom arabe doit être d'au moins 3 caractères/caractère!",
    'name_ar_max'                     => 'La longueur du texte du champ du nom arabe ne doit pas dépasser 199 caractères/caractères!',

    'name_en_required'                => 'Le champ du nom anglais est obligatoire!',
    'name_en_min'                     => "La longueur du texte du champ du nom anglais doit être d'au moins 3 caractères/caractère!",
    'name_en_max'                     => 'La longueur du texte du champ du nom anglais ne doit pas dépasser 199 caractères/caractères!',

    'name_fr_required'                => 'Le champ du nom français est obligatoire!',
    'name_fr_min'                     => "La longueur du texte du champ du nom français doit être d'au moins 3 caractères/caractère!",
    'name_fr_max'                     => 'La longueur du texte du champ du nom français ne doit pas dépasser 199 caractères/caractères!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message content
    ///////////////////////////////////////////////////////////////////////////////////////
    'content_ar_required'             => 'Le champ du contenu arabe est obligatoire!',
    'content_ar_max'                  => 'La longueur du texte du champ du contenu arabe ne doit pas dépasser 500 caractères/caractères!',

    'content_en_required'             => 'Le champ du contenu anglais est obligatoire!',
    'content_en_max'                  => 'La longueur du texte du champ du contenu anglais ne doit pas dépasser 500 caractères/caractères!',

    'content_fr_required'             => 'Le champ du contenu français est obligatoire!',
    'content_fr_max'                  => 'La longueur du texte du champ du contenu français ne doit pas dépasser 500 caractères/caractères!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message description
    ///////////////////////////////////////////////////////////////////////////////////////
    'description_ar_required'         => 'Le champ du la description arabe est obligatoire!',
    'description_ar_max'              => 'La longueur du texte du champ du la description arabe ne doit pas dépasser 500 caractères/caractères!',

    'description_en_required'         => 'Le champ du la description anglais est obligatoire!',
    'description_en_max'              => 'La longueur du texte du champ du la description anglais ne doit pas dépasser 500 caractères/caractères!',

    'description_fr_required'         => 'Le champ du la description français est obligatoire!',
    'description_fr_max'              => 'La longueur du texte du champ du la description français ne doit pas dépasser 500 caractères/caractères!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message title
    ///////////////////////////////////////////////////////////////////////////////////////
    'title_ar_required'               => 'Le champ du titre arabe est obligatoire!',
    'title_ar_max'                    => 'La longueur du texte du champ de titre arabe ne doit pas dépasser 199 caractères/caractères!',

    'title_en_required'               => 'Le champ du titre en anglais est requis!',
    'title_en_max'                    => 'La longueur du texte du champ de titre anglais ne doit pas dépasser 199 caractères/caractères!',

    'title_fr_required'               => 'Le champ du titre français est requis!',
    'title_fr_max'                    => 'La longueur du texte du champ titre français ne doit pas dépasser 199 caractères/caractères!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message location
    ///////////////////////////////////////////////////////////////////////////////////////
    'location_ar_required'            => 'Le champ de localisation en arabe est obligatoire!',
    'location_ar_max'                 => 'La longueur du texte du champ de localisation arabe ne doit pas dépasser 199 caractères/caractères!',

    'location_en_required'            => 'Le champ de localisation en anglais est obligatoire!',
    'location_en_max'                 => 'La longueur du texte du champ de localisation en anglais ne doit pas dépasser 199 caractères/caractères!',

    'location_fr_required'            => 'Le champ de localisation en français est obligatoire!',
    'location_fr_max'                 => 'La longueur du texte du champ de localisation en français ne doit pas dépasser 199 caractères/caractères!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message time
    ///////////////////////////////////////////////////////////////////////////////////////
    'time_required'                   => 'Le champ horaire est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message Date
    ///////////////////////////////////////////////////////////////////////////////////////
    'date_required'                   => 'Le champ date est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message country id
    ///////////////////////////////////////////////////////////////////////////////////////
    'country_id_required'             => 'Le champ pays est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message governorate id
    ///////////////////////////////////////////////////////////////////////////////////////
    'governorate_id_required'         => 'Le champ gouvernorat est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message city id
    ///////////////////////////////////////////////////////////////////////////////////////
    'city_id_required'                => 'Le champ ville est obligatoire!',
    'city_exists'                     => 'The selected city is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message user id
    ///////////////////////////////////////////////////////////////////////////////////////
    'user_id_required'                => 'Le champ utilisateur est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message category id
    ///////////////////////////////////////////////////////////////////////////////////////
    'category_id_required'            => 'Le champ catégorie est obligatoire!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message budget
    ///////////////////////////////////////////////////////////////////////////////////////
    'budget_required'                 => 'Le champ budget est obligatoire!',
    'budget_integer'                  => 'Le champ Budget doit être un entier!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message status
    ///////////////////////////////////////////////////////////////////////////////////////
    'status_required'                 => "Le champ d'état est obligatoire.",
    'status_selected'                 => "Le statut sélectionné n'est pas valide",
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message country
    ///////////////////////////////////////////////////////////////////////////////////////
    'country_id'                      => 'Choose countries from countries, countries are required',
    'country_exists'                  => 'The selected country is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message governorate
    ///////////////////////////////////////////////////////////////////////////////////////
    'governorate_id'                  => 'Choose governorates from governorates, governorates are required',
    'governorate_exists'              => 'The selected governorate is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message category id
    ///////////////////////////////////////////////////////////////////////////////////////
    'category_id'                    => 'Choose category from categories, categories are required',
    'category_exists'                => 'The selected category is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message Users
    ///////////////////////////////////////////////////////////////////////////////////////
    'current_password_required'     => 'Current password is required.',
    'current_password_min'          => 'Password must be more than 8 characters.',
    'current_password'              => 'The current password must be correct.',
    'password_required'             => 'New password is required.',
    'password_confirmed'            => 'The password must match.',
    'password_min'                  => 'Password must be more than 8 characters.',
    'avatar_image'                  => 'The image must be in a category (jpg, jpeg, png, bmp, gif, svg, webp).',
    'cover_image'                   => 'The image must be in a category (jpg, jpeg, png, bmp, gif, svg, webp).',
];
