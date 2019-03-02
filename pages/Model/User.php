<?php

    class User {
        public $customerID;
        public $initials;
        public $firstname;
        public $lastname;
        public $infix;
        public $phone;
        public $gender;
        public $address;
        public $addressAffix;
        public $city;
        public $zipcode;
        public $email;
        public $createUpdate;
        public $lastUpdate;

        public function __construct() {
        }

        /**
         * @return mixed
         */
        public function getCustomerID() {
            return $this->customerID;
        }

        /**
         * @return mixed
         */
        public function getInitials() {
            return $this->initials;
        }

        /**
         * @return mixed
         */
        public function getFirstname() {
            return $this->firstname;
        }

        /**
         * @return mixed
         */
        public function getLastname() {
            return $this->lastname;
        }

        /**
         * @return mixed
         */
        public function getInfix() {
            return $this->infix;
        }

        /**
         * @return mixed
         */
        public function getPhone() {
            return $this->phone;
        }

        /**
         * @return mixed
         */
        public function getGender() {
            return $this->gender;
        }

        /**
         * @return mixed
         */
        public function getAddress() {
            return $this->address;
        }

        /**
         * @return mixed
         */
        public function getAddressAffix() {
            return $this->addressAffix;
        }

        /**
         * @return mixed
         */
        public function getCity() {
            return $this->city;
        }

        /**
         * @return mixed
         */
        public function getZipcode() {
            return $this->zipcode;
        }

        /**
         * @return mixed
         */
        public function getEmail() {
            return $this->email;
        }

        /**
         * @return mixed
         */
        public function getCreateUpdate() {
            return $this->createUpdate;
        }

        /**
         * @return mixed
         */
        public function getLastUpdate() {
            return $this->lastUpdate;
        }

        /**
         * @param mixed $customerID
         */
        public function setCustomerID($customerID) {
            $this->customerID = $customerID;
        }

        /**
         * @param mixed $initials
         */
        public function setInitials($initials) {
            $this->initials = $initials;
        }

        /**
         * @param mixed $firstname
         */
        public function setFirstname($firstname) {
            $this->firstname = $firstname;
        }

        /**
         * @param mixed $lastname
         */
        public function setLastname($lastname) {
            $this->lastname = $lastname;
        }

        /**
         * @param mixed $infix
         */
        public function setInfix($infix) {
            $this->infix = $infix;
        }

        /**
         * @param mixed $phone
         */
        public function setPhone($phone) {
            $this->phone = $phone;
        }

        /**
         * @param mixed $gender
         */
        public function setGender($gender) {
            $this->gender = $gender;
        }

        /**
         * @param mixed $address
         */
        public function setAddress($address) {
            $this->address = $address;
        }

        /**
         * @param mixed $addressAffix
         */
        public function setAddressAffix($addressAffix) {
            $this->addressAffix = $addressAffix;
        }

        /**
         * @param mixed $city
         */
        public function setCity($city) {
            $this->city = $city;
        }

        /**
         * @param mixed $zipcode
         */
        public function setZipcode($zipcode) {
            $this->zipcode = $zipcode;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email) {
            $this->email = $email;
        }

        /**
         * @param mixed $createUpdate
         */
        public function setCreateUpdate($createUpdate) {
            $this->createUpdate = $createUpdate;
        }

        /**
         * @param mixed $lastUpdate
         */
        public function setLastUpdate($lastUpdate) {
            $this->lastUpdate = $lastUpdate;
        }

    }
?>