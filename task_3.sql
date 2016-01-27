SELECT
	DISTINCT d.`type` AS type,
	(SELECT d1.`value` FROM `data` d1 WHERE d.`type`=d1.`type` ORDER BY d1.`date` DESC LIMIT 0,1) AS value
FROM
	`data` d