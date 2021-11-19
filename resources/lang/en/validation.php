<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    /*'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],*/

     'accepted' => 'Isian :attribute harus diterima.',
    'accepted_if' => 'Isian :attribute harus diterima ketika :other is :value.',
    'active_url' => 'Isian :attribute bukan URL yang valid.',
    'after' => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Isian :attribute harus berupa tanggal setelah atau sama dengan tanggal :date.',
    'alpha' => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Isian :attribute harus berupa sebuah array.',
    'before' => 'Isian :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan tanggal :date.',
    'between' => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file' => 'Isian :attribute harus antara :min dan :max kilobytes.',
        'string' => 'Isian :attribute harus antara :min dan :max karakter.',
        'array' => 'Isian :attribute harus antara :min dan :max items.',
    ],

    // 'boolean' => 'The :attribute field must be true or false.',
    // 'confirmed' => 'The :attribute confirmation does not match.',
    // 'current_password' => 'The password is incorrect.',
    // 'date' => 'The :attribute is not a valid date.',
    // 'date_equals' => 'The :attribute must be a date equal to :date.',
    // 'date_format' => 'The :attribute does not match the format :format.',
    // 'different' => 'The :attribute and :other must be different.',
    // 'digits' => 'The :attribute must be :digits digits.',
    // 'digits_between' => 'The :attribute must be between :min and :max digits.',
    // 'dimensions' => 'The :attribute has invalid image dimensions.',
    // 'distinct' => 'The :attribute field has a duplicate value.',
    // 'email' => 'The :attribute must be a valid email address.',
    // 'ends_with' => 'The :attribute must end with one of the following: :values.',
    // 'exists' => 'The selected :attribute is invalid.',
    // 'file' => 'The :attribute must be a file.',
    // 'filled' => 'The :attribute field must have a value.',
    // 'gt' => [
    //     'numeric' => 'The :attribute must be greater than :value.',
    //     'file' => 'The :attribute must be greater than :value kilobytes.',
    //     'string' => 'The :attribute must be greater than :value characters.',
    //     'array' => 'The :attribute must have more than :value items.',
    // ],


    'boolean' => 'Isian :attribute harus berupa true atau false',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'The password is incorrect.',
    'date' => 'Isian :attribute bukan tanggal yang valid.',
    'date_equals' => 'Isian :attribute must be a date equal to :date.',
    'date_format' => 'Isian :attribute tidak cocok dengan format :format.',
    'different' => 'Isian :attribute dan :other harus berbeda.',
    'digits' => 'Isian :attribute harus berupa angka :digits.',
    'digits_between' => 'Isian :attribute harus antara angka :min dan :max.',
    'dimensions' => 'Bidang :attribute tidak memiliki dimensi gambar yang valid.',
    'distinct' => 'Bidang isian :attribute memiliki nilai yang duplikat.',
    'email' => 'Isian :attribute harus berupa alamat surel yang valid.',
    'exists' => 'Isian :attribute yang dipilih tidak valid.',
    'file' => 'Bidang :attribute harus berupa sebuah berkas.',
    'filled' => 'Isian :attribute harus memiliki nilai.',
    'gt'             => [
        'numeric' => 'Isian :attribute harus bernilai lebih besar dari :value.',
        'file'    => 'Isian :attribute harus berukuran lebih besar dari :value kilobita.',
        'string'  => 'Isian :attribute harus berisi lebih besar dari :value karakter.',
        'array'   => 'Isian :attribute harus memiliki lebih dari :value anggota.',
    ],


    // 'gte' => [
    //     'numeric' => 'The :attribute must be greater than or equal to :value.',
    //     'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
    //     'string' => 'The :attribute must be greater than or equal to :value characters.',
    //     'array' => 'The :attribute must have :value items or more.',
    // ],

     'gte' => [
        'numeric' => 'Isian :attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'file'    => 'Isian :attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'string'  => 'Isian :attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus terdiri dari :value anggota atau lebih.',
    ],

    // 'image' => 'The :attribute must be an image.',
    // 'in' => 'The selected :attribute is invalid.',
    // 'in_array' => 'The :attribute field does not exist in :other.',
    // 'integer' => 'The :attribute must be an integer.',
    // 'ip' => 'The :attribute must be a valid IP address.',
    // 'ipv4' => 'The :attribute must be a valid IPv4 address.',
    // 'ipv6' => 'The :attribute must be a valid IPv6 address.',
    // 'json' => 'The :attribute must be a valid JSON string.',
    // 'lt' => [
    //     'numeric' => 'The :attribute must be less than :value.',
    //     'file' => 'The :attribute must be less than :value kilobytes.',
    //     'string' => 'The :attribute must be less than :value characters.',
    //     'array' => 'The :attribute must have less than :value items.',
    // ],

    'image'    => 'Isian :attribute harus berupa gambar.',
    'in'       => 'Isian :attribute yang dipilih tidak valid.',
    'in_array' => 'Isian :attribute tidak ada di dalam :other.',
    'integer'  => 'Isian :attribute harus berupa bilangan bulat.',
    'ip'       => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4'     => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'     => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json'     => 'Isian :attribute harus berupa JSON string yang valid.',
    'lt'       => [
        'numeric' => 'Isian :attribute harus bernilai kurang dari :value.',
        'file'    => 'Isian :attribute harus berukuran kurang dari :value kilobita.',
        'string'  => 'Isian :attribute harus berisi kurang dari :value karakter.',
        'array'   => 'Isian :attribute harus memiliki kurang dari :value anggota.',
    ],

    // 'lte' => [
    //     'numeric' => 'The :attribute must be less than or equal to :value.',
    //     'file' => 'The :attribute must be less than or equal to :value kilobytes.',
    //     'string' => 'The :attribute must be less than or equal to :value characters.',
    //     'array' => 'The :attribute must not have more than :value items.',
    // ],
    // 'max' => [
    //     'numeric' => 'The :attribute must not be greater than :max.',
    //     'file' => 'The :attribute must not be greater than :max kilobytes.',
    //     'string' => 'The :attribute must not be greater than :max characters.',
    //     'array' => 'The :attribute must not have more than :max items.',
    // ],

     'lte' => [
        'numeric' => 'Isian :attribute harus bernilai kurang dari atau sama dengan :value.',
        'file'    => 'Isian :attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'string'  => 'Isian :attribute harus berisi kurang dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus tidak lebih dari :value anggota.',
    ],
    'max' => [ 
        'numeric' => 'Isian :attribute maskimal bernilai :max.',
        'file'    => 'Isian :attribute maksimal berukuran :max kilobita.',
        'string'  => 'Isian :attribute maskimal berisi :max karakter.',
        'array'   => 'Isian :attribute maksimal terdiri dari :max anggota.',
    ],

    // 'mimes' => 'The :attribute must be a file of type: :values.',
    // 'mimetypes' => 'The :attribute must be a file of type: :values.',
    // 'min' => [
    //     'numeric' => 'The :attribute must be at least :min.',
    //     'file' => 'The :attribute must be at least :min kilobytes.',
    //     'string' => 'The :attribute must be at least :min characters.',
    //     'array' => 'The :attribute must have at least :min items.',
    // ],
    // 'multiple_of' => 'The :attribute must be a multiple of :value.',
    // 'not_in' => 'The selected :attribute is invalid.',
    // 'not_regex' => 'The :attribute format is invalid.',
    // 'numeric' => 'The :attribute must be a number.',
    // 'password' => 'The password is incorrect.',
    // 'present' => 'The :attribute field must be present.',
    // 'regex' => 'The :attribute format is invalid.',
    // 'required' => 'The :attribute field is required.',
    // 'required_if' => 'The :attribute field is required when :other is :value.',
    // 'required_unless' => 'The :attribute field is required unless :other is in :values.',
    // 'required_with' => 'The :attribute field is required when :values is present.',
    // 'required_with_all' => 'The :attribute field is required when :values are present.',
    // 'required_without' => 'The :attribute field is required when :values is not present.',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    // 'prohibited' => 'The :attribute field is prohibited.',
    // 'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    // 'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    // 'prohibits' => 'The :attribute field prohibits :other from being present.',
    // 'same' => 'The :attribute and :other must match.',
    // 'size' => [
    //     'numeric' => 'The :attribute must be :size.',
    //     'file' => 'The :attribute must be :size kilobytes.',
    //     'string' => 'The :attribute must be :size characters.',
    //     'array' => 'The :attribute must contain :size items.',
    // ],
    // 'starts_with' => 'The :attribute must start with one of the following: :values.',
    // 'string' => 'The :attribute must be a string.',
    // 'timezone' => 'The :attribute must be a valid timezone.',
    // 'unique' => 'The :attribute has already been taken.',
    // 'uploaded' => 'The :attribute failed to upload.',
    // 'url' => 'The :attribute must be a valid URL.',
    // 'uuid' => 'The :attribute must be a valid UUID.',

    
    'mimes'     => 'Isian :attribute harus berupa berkas berjenis: :values.',
    'mimetypes' => 'Isian :attribute harus berupa berkas berjenis: :values.',
    'min'       => [
        'numeric' => 'Isian :attribute minimal bernilai :min.',
        'file'    => 'Isian :attribute minimal berukuran :min kilobita.',
        'string'  => 'Isian :attribute minimal berisi :min karakter.',
        'array'   => 'Isian :attribute minimal terdiri dari :min anggota.',
    ],
    'not_in'               => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex'            => 'Isian Format :attribute tidak valid.',
    'numeric'              => 'Isian :attribute harus berupa angka.',
    'password'             => 'Isian Kata sandi salah.',
    'present'              => 'Isian :attribute wajib ada.',
    'regex'                => 'Isian Format :attribute tidak valid.',
    'required'             => 'Isian :attribute wajib diisi.',
    'required_if'          => 'Isian :attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => 'Isian :attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => 'Isian :attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => 'Isian :attribute wajib diisi bila terdapat :values.',
    'required_without'     => 'Isian :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Isian :attribute wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => 'Isian :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'file'    => 'Isian :attribute harus berukuran :size kilobyte.',
        'string'  => 'Isian :attribute harus berukuran :size karakter.',
        'array'   => 'Isian :attribute harus mengandung :size anggota.',
    ],
    'starts_with' => 'Isian :attribute harus diawali salah satu dari berikut: :values',
    'string'      => 'Isian :attribute harus berupa string.',
    'timezone'    => 'Isian :attribute harus berisi zona waktu yang valid.',
    'unique'      => 'Isian :attribute sudah ada sebelumnya.',
    'uploaded'    => 'Isian :attribute gagal diunggah.',
    'url'         => 'Isian :attribute tidak valid.',
    'uuid'        => 'Isian :attribute harus merupakan UUID yang valid.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
