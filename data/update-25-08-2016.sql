ALTER TABLE `hotels`
    ADD COLUMN `created_at` datetime NULL AFTER `status`;
    
UPDATE `hotels` SET `created_at` = '2016-08-16 08:10:36' WHERE `id` = '1';
UPDATE `hotels` SET `created_at` = '2016-08-16 02:10:36' WHERE `id` = '2';
UPDATE `hotels` SET `created_at` = '2016-08-16 12:10:36' WHERE `id` = '3';
UPDATE `hotels` SET `created_at` = '2016-08-16 17:10:36' WHERE `id` = '4';
UPDATE `hotels` SET `created_at` = '2016-08-16 21:10:36' WHERE `id` = '5';
