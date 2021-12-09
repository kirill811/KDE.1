SELECT
  `klient u zakaz`.id_zokoz,
  `model avto`.id_model,
  `model avto`.model,
  `model avto`.id_color,
  `model avto`.id_odivka,
  `model avto`.id_korobka,
  `model avto`.Цена
FROM `klient u zakaz`
  INNER JOIN `model avto`
    ON `klient u zakaz`.id_model = `model avto`.id_model
WHERE `klient u zakaz`.id_zokoz = 1