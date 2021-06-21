INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES 
(NULL,'123','20','200','2021-06-17'),
(NULL,'456','40','250','2021-06-17'),
(NULL,'789','10','220','2021-06-16'),
(NULL,'159','30','220','2021-06-16'),
(NULL,'123','50','200','2021-05-01'),
(NULL,'456','10','250','2021-05-01'),
(NULL,'789','60','220','2021-06-16'),
(NULL,'159','70','220','2021-06-17'),
(NULL,'789','20','220','2021-05-01'),
(NULL,'159','30','220','2021-06-17')

INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES 
('788','paradajz','200'),
('776','crni luk','50'),
('761','beli luk','80')

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES 
(NULL,'788','50','200','2021-06-16')

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES 
(NULL,'788','20','200','2021-06-17'),
(NULL,'788','40','250','2021-06-17'),
(NULL,'788','10','220','2021-06-17')

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES 
(NULL,'776','30','50','2021-05-01')

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES 
(NULL,'761','20','80','2021-06-17'),
(NULL,'761','50','70','2021-06-16'),
(NULL,'761','30','90','2021-05-01')

DELETE FROM `prodaja` WHERE `barkod`='788' AND datum='2021-06-16'

UPDATE prodaja SET cena=cena+cena*0.1 WHERE datum='2021-06-17'

SELECT * 
FROM `prodaja` join proizvodi ON prodaja.barkod = proizvodi.barkod 
WHERE datum='2021-05-01'

SELECT kolicina, datum FROM `prodaja`