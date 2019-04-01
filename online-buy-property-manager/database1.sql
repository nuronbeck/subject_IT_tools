-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2019 г., 15:30
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applicants_and_tenants`
--

CREATE TABLE `applicants_and_tenants` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `driver_license_number` varchar(15) DEFAULT NULL,
  `driver_license_state` varchar(15) DEFAULT NULL,
  `requested_lease_term` varchar(15) DEFAULT NULL,
  `monthly_gross_pay` decimal(8,2) DEFAULT NULL,
  `additional_income` decimal(8,2) DEFAULT NULL,
  `assets` decimal(8,2) DEFAULT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'Applicant',
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `applications_leases`
--

CREATE TABLE `applications_leases` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenants` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'Application',
  `property` int(10) UNSIGNED DEFAULT NULL,
  `unit` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'Fixed',
  `total_number_of_occupants` varchar(15) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `recurring_charges_frequency` varchar(40) NOT NULL DEFAULT 'Monthly',
  `next_due_date` date DEFAULT NULL,
  `rent` decimal(8,2) DEFAULT NULL,
  `security_deposit` decimal(15,2) DEFAULT NULL,
  `security_deposit_date` date DEFAULT NULL,
  `emergency_contact` varchar(100) DEFAULT NULL,
  `co_signer_details` varchar(100) DEFAULT NULL,
  `notes` text,
  `agreement` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `employment_and_income_history`
--

CREATE TABLE `employment_and_income_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenant` int(10) UNSIGNED DEFAULT NULL,
  `employer_name` varchar(15) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `employer_phone` varchar(15) DEFAULT NULL,
  `employed_from` date DEFAULT NULL,
  `employed_till` date DEFAULT NULL,
  `occupation` varchar(40) DEFAULT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'applicants_and_tenants', 1, 3, 3, 3),
(2, 2, 'applications_leases', 1, 3, 3, 3),
(3, 2, 'residence_and_rental_history', 1, 3, 3, 3),
(4, 2, 'employment_and_income_history', 1, 3, 3, 3),
(5, 2, 'references', 1, 3, 3, 3),
(6, 2, 'rental_owners', 1, 3, 3, 3),
(7, 2, 'properties', 1, 3, 3, 3),
(8, 2, 'property_photos', 1, 3, 3, 3),
(9, 2, 'units', 1, 3, 3, 3),
(10, 2, 'unit_photos', 1, 3, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2019-03-13', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2019-03-13', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('doniyor.jiga', '1fa2ff644bacbc9537336ae51936e54f', 'doniyor.jiga@mail.ru', '2019-03-13', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2019-03-13', NULL, NULL),
('guest', NULL, NULL, '2019-03-13', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2019-03-13', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_name` text NOT NULL,
  `type` varchar(40) NOT NULL,
  `number_of_units` decimal(15,0) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `owner` int(10) UNSIGNED DEFAULT NULL,
  `operating_account` varchar(40) DEFAULT NULL,
  `property_reserve` decimal(15,0) DEFAULT NULL,
  `lease_term` varchar(15) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `State` varchar(40) DEFAULT NULL,
  `ZIP` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `property_photos`
--

CREATE TABLE `property_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `property` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `references`
--

CREATE TABLE `references` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenant` int(10) UNSIGNED DEFAULT NULL,
  `reference_name` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rental_owners`
--

CREATE TABLE `rental_owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `company_name` varchar(40) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `primary_email` varchar(40) DEFAULT NULL,
  `alternate_email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `zip` decimal(15,0) DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `residence_and_rental_history`
--

CREATE TABLE `residence_and_rental_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenant` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `landlord_or_manager_name` varchar(15) DEFAULT NULL,
  `landlord_or_manager_phone` varchar(15) DEFAULT NULL,
  `monthly_rent` decimal(6,2) DEFAULT NULL,
  `duration_of_residency_from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `reason_for_leaving` varchar(40) DEFAULT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `property` int(10) UNSIGNED DEFAULT NULL,
  `unit_number` varchar(40) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `size` varchar(40) DEFAULT NULL,
  `country` int(10) UNSIGNED DEFAULT NULL,
  `street` int(10) UNSIGNED DEFAULT NULL,
  `city` int(10) UNSIGNED DEFAULT NULL,
  `state` int(10) UNSIGNED DEFAULT NULL,
  `postal_code` int(10) UNSIGNED DEFAULT NULL,
  `rooms` varchar(40) DEFAULT NULL,
  `bathroom` decimal(15,0) DEFAULT NULL,
  `features` text,
  `market_rent` decimal(15,0) DEFAULT NULL,
  `rental_amount` decimal(6,2) DEFAULT NULL,
  `deposit_amount` decimal(6,2) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `unit_photos`
--

CREATE TABLE `unit_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applicants_and_tenants`
--
ALTER TABLE `applicants_and_tenants`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `applications_leases`
--
ALTER TABLE `applications_leases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenants` (`tenants`),
  ADD KEY `property` (`property`),
  ADD KEY `unit` (`unit`);

--
-- Индексы таблицы `employment_and_income_history`
--
ALTER TABLE `employment_and_income_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant` (`tenant`);

--
-- Индексы таблицы `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Индексы таблицы `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Индексы таблицы `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Индексы таблицы `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Индексы таблицы `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Индексы таблицы `property_photos`
--
ALTER TABLE `property_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property` (`property`);

--
-- Индексы таблицы `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant` (`tenant`);

--
-- Индексы таблицы `rental_owners`
--
ALTER TABLE `rental_owners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `residence_and_rental_history`
--
ALTER TABLE `residence_and_rental_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant` (`tenant`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property` (`property`);

--
-- Индексы таблицы `unit_photos`
--
ALTER TABLE `unit_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`unit`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applicants_and_tenants`
--
ALTER TABLE `applicants_and_tenants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `applications_leases`
--
ALTER TABLE `applications_leases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `employment_and_income_history`
--
ALTER TABLE `employment_and_income_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `property_photos`
--
ALTER TABLE `property_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rental_owners`
--
ALTER TABLE `rental_owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `residence_and_rental_history`
--
ALTER TABLE `residence_and_rental_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `unit_photos`
--
ALTER TABLE `unit_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
