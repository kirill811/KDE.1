SELECT
  `model avto`.id_model,
  `klient u zakaz`.id_zokoz,
  `klient u zakaz`.id_model,
  `klient u zakaz`.ФИО,
  `klient u zakaz`.`Адрес заказа`,
  `klient u zakaz`.Телефон,
  `klient u zakaz`.`Дата заказа`
FROM `model avto`
  INNER JOIN korobka
    ON `model avto`.id_korobka = korobka.id_korobka
  INNER JOIN `klient u zakaz`
    ON `klient u zakaz`.id_model = `model avto`.id_model
WHERE `model avto`.id_model = 1