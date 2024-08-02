<?php

namespace App\Seeds;

use Illuminate\Database\Capsule\Manager as Capsule;

class ContactSeeder {
    public function run() {
        $contacts = [
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '123-456-7890', 'address' => '123 Elm Street', 'photo' => 'photo1.jpg'],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => '987-654-3210', 'address' => '456 Oak Avenue', 'photo' => 'photo2.jpg'],
            ['name' => 'Robert Johnson', 'email' => 'robert.johnson@example.com', 'phone' => '555-123-4567', 'address' => '789 Pine Lane', 'photo' => 'photo3.jpg'],
            ['name' => 'Emily Davis', 'email' => 'emily.davis@example.com', 'phone' => '555-987-6543', 'address' => '321 Maple Drive', 'photo' => 'photo4.jpg'],
            ['name' => 'Michael Brown', 'email' => 'michael.brown@example.com', 'phone' => '444-555-6666', 'address' => '654 Birch Street', 'photo' => 'photo5.jpg'],
            ['name' => 'Jessica Wilson', 'email' => 'jessica.wilson@example.com', 'phone' => '777-888-9999', 'address' => '987 Cedar Avenue', 'photo' => 'photo6.jpg'],
            ['name' => 'David Lee', 'email' => 'david.lee@example.com', 'phone' => '333-444-5555', 'address' => '159 Willow Way', 'photo' => 'photo7.jpg'],
            ['name' => 'Laura Harris', 'email' => 'laura.harris@example.com', 'phone' => '666-777-8888', 'address' => '753 Elm Street', 'photo' => 'photo8.jpg'],
            ['name' => 'James Miller', 'email' => 'james.miller@example.com', 'phone' => '222-333-4444', 'address' => '852 Maple Street', 'photo' => 'photo9.jpg'],
            ['name' => 'Sarah Martinez', 'email' => 'sarah.martinez@example.com', 'phone' => '111-222-3333', 'address' => '741 Oak Avenue', 'photo' => 'photo10.jpg'],
            ['name' => 'Daniel Anderson', 'email' => 'daniel.anderson@example.com', 'phone' => '444-555-6666', 'address' => '963 Pine Lane', 'photo' => 'photo11.jpg'],
            ['name' => 'Nancy Thompson', 'email' => 'nancy.thompson@example.com', 'phone' => '555-666-7777', 'address' => '852 Cedar Avenue', 'photo' => 'photo12.jpg'],
            ['name' => 'Chris Robinson', 'email' => 'chris.robinson@example.com', 'phone' => '666-777-8888', 'address' => '357 Birch Street', 'photo' => 'photo13.jpg'],
            ['name' => 'Amanda Clark', 'email' => 'amanda.clark@example.com', 'phone' => '777-888-9999', 'address' => '159 Oak Avenue', 'photo' => 'photo14.jpg'],
            ['name' => 'Joshua Lewis', 'email' => 'joshua.lewis@example.com', 'phone' => '888-999-0000', 'address' => '753 Willow Way', 'photo' => 'photo15.jpg'],
            ['name' => 'Olivia Walker', 'email' => 'olivia.walker@example.com', 'phone' => '999-000-1111', 'address' => '852 Elm Street', 'photo' => 'photo16.jpg'],
            ['name' => 'Ethan Young', 'email' => 'ethan.young@example.com', 'phone' => '000-111-2222', 'address' => '741 Maple Avenue', 'photo' => 'photo17.jpg'],
            ['name' => 'Sophia Allen', 'email' => 'sophia.allen@example.com', 'phone' => '111-222-3333', 'address' => '963 Cedar Street', 'photo' => 'photo18.jpg'],
            ['name' => 'Mason Scott', 'email' => 'mason.scott@example.com', 'phone' => '222-333-4444', 'address' => '852 Pine Lane', 'photo' => 'photo19.jpg'],
            ['name' => 'Isabella King', 'email' => 'isabella.king@example.com', 'phone' => '333-444-5555', 'address' => '357 Elm Street', 'photo' => 'photo20.jpg'],
            ['name' => 'Logan Wright', 'email' => 'logan.wright@example.com', 'phone' => '444-555-6666', 'address' => '741 Birch Avenue', 'photo' => 'photo21.jpg'],
        ];

        foreach ($contacts as $contact) {
            Capsule::table('contacts')->insert($contact);
        }
    }
}
