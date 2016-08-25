ALTER TABLE `hotels`
ADD COLUMN `created_at` datetime NULL AFTER `status`;

UPDATE `hotels` SET `created_at` = '2016-04-16 20:25:36' WHERE 'id' = '1'
UPDATE `hotels` SET `created_at` = '2016-04-16 22:20:36' WHERE 'id' = '2'
UPDATE `hotels` SET `created_at` = '2016-04-16 21:20:36' WHERE 'id' = '3'
UPDATE `hotels` SET `created_at` = '2016-04-16 20:50:36' WHERE 'id' = '4'