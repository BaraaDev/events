<?php

return [
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message name
    ///////////////////////////////////////////////////////////////////////////////////////
    'name_required'          => 'The name field is required.',
    'name_min'               => 'The text length of the name field must be at least 3 characters/character.',
    'name_max'               => 'The text length of the name field must not exceed 199 characters/characters.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message username
    ///////////////////////////////////////////////////////////////////////////////////////
    'username_required'          => 'The username field is required.',
    'username_min'               => 'The text length of the username field must be at least 3 characters/character.',
    'username_max'               => 'The text length of the username field must not exceed 199 characters/characters.',
    'username_unique'            => 'The username value is already in use.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message phone
    ///////////////////////////////////////////////////////////////////////////////////////
    'phone_required'          => 'The phone field is required.',
    'phone_numeric'           => 'The phone must be a number.',
    'phone_digits'            => 'The phone must be 11 digits.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message email
    ///////////////////////////////////////////////////////////////////////////////////////
    'email_required'          => 'The email field is required.',
    'email_min'               => 'The text length of the email field must be at least 3 characters/character.',
    'email_max'               => 'The text length of the email field must not exceed 255 characters/characters.',
    'email_unique'            => 'The email value is already in use.',
    'email_email'             => 'The email must be from the email group.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message bio
    ///////////////////////////////////////////////////////////////////////////////////////
    'bio_max'                   => 'The text length of the bio field must not exceed 255 characters/characters.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message gender
    ///////////////////////////////////////////////////////////////////////////////////////
    'gender_in'                 => 'The selected gender is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message gender
    ///////////////////////////////////////////////////////////////////////////////////////
    'dob_date'                  => 'The date of birth is not a valid date.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message address
    ///////////////////////////////////////////////////////////////////////////////////////
    'address_max'               => 'The text length of the home address field must not exceed 255 characters/characters.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message postal code
    ///////////////////////////////////////////////////////////////////////////////////////
    'postal_code_numeric'       => 'The postal code must be a number.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message name Ar
    ///////////////////////////////////////////////////////////////////////////////////////
    'name_ar_required'          => 'The Arabic name field is required!',
    'name_ar_min'               => 'The text length of the Arabic name field must be at least 3 characters/character!',
    'name_ar_max'               => 'The text length of the Arabic name field must not exceed 199 characters/characters!',

    'name_en_required'          => 'The English name field is required!',
    'name_en_min'               => 'The text length of the English name field must be at least 3 characters/character!',
    'name_en_max'               => 'The text length of the English name field must not exceed 199 characters/characters!',

    'name_fr_required'          => 'The French name field is required!',
    'name_fr_min'               => 'The text length of the French name field must be at least 3 characters/character!',
    'name_fr_max'               => 'The text length of the French name field must not exceed 199 characters/characters!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message content
    ///////////////////////////////////////////////////////////////////////////////////////
    'content_ar_required'       => 'The Arabic content field is required!',
    'content_ar_max'            => 'The text length of the Arabic content field must not exceed 500 characters/characters!',

    'content_en_required'       => 'The English content field is required!',
    'content_en_max'            => 'The text length of the English content field must not exceed 500 characters/characters!',

    'content_fr_required'       => 'The French content field is required!',
    'content_fr_max'            => 'The text length of the French content field must not exceed 500 characters/characters!',

    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message title
    ///////////////////////////////////////////////////////////////////////////////////////
    'title_ar_required'         => 'The Arabic title field is required!',
    'title_ar_max'              => 'The text length of the Arabic title field must not exceed 199 characters/characters!',

    'title_en_required'         => 'The English title field is required!',
    'title_en_max'              => 'The text length of the English title field must not exceed 199 characters/characters!',

    'title_fr_required'         => 'The French title field is required!',
    'title_fr_max'              => 'The text length of the French title field must not exceed 199 characters/characters!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message location
    ///////////////////////////////////////////////////////////////////////////////////////
    'location_ar_required'      => 'The Arabic location field is required!',
    'location_ar_max'           => 'The text length of the Arabic location field must not exceed 199 characters/characters!',

    'location_en_required'      => 'The English location field is required!',
    'location_en_max'           => 'The text length of the English location field must not exceed 199 characters/characters!',

    'location_fr_required'      => 'The French location field is required!',
    'location_fr_max'           => 'The text length of the French location field must not exceed 199 characters/characters!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message time
    ///////////////////////////////////////////////////////////////////////////////////////
    'time_required'             => 'The time field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message Date
    ///////////////////////////////////////////////////////////////////////////////////////
    'date_required'             => 'The date field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message country id
    ///////////////////////////////////////////////////////////////////////////////////////
    'country_id_required'       => 'The country field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message governorate id
    ///////////////////////////////////////////////////////////////////////////////////////
    'governorate_id_required'   => 'The governorate field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message city id
    ///////////////////////////////////////////////////////////////////////////////////////
    'city_id_required'          => 'The city field is required!',
    'city_exists'               => 'The selected city is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message user id
    ///////////////////////////////////////////////////////////////////////////////////////
    'user_id_required'          => 'The user field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message category id
    ///////////////////////////////////////////////////////////////////////////////////////
    'category_id_required'      => 'The category field is required!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message budget
    ///////////////////////////////////////////////////////////////////////////////////////
    'budget_required'           => 'The budget field is required!',
    'budget_integer'            => 'Budget field must be an integer!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message status
    ///////////////////////////////////////////////////////////////////////////////////////
    'status_required'           => 'The status field is required.',
    'status_selected'           => 'The selected status is invalid!',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message country id
    ///////////////////////////////////////////////////////////////////////////////////////
    'country_id'                    => 'Choose countries from countries, countries are required',
    'country_exists'                => 'The selected country is invalid.',
    ///////////////////////////////////////////////////////////////////////////////////////
    /// Check the message governorate id
    ///////////////////////////////////////////////////////////////////////////////////////
    'governorate_id'                => 'Choose countries from governorates, governorates are required',
    'governorate_exists'            => 'The selected governorate is invalid.',
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
];
