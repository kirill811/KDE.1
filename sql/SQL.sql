SELECT
  `klient u zakaz`.id_zokoz,
  `klient u zakaz`.ФИО,
  `klient u zakaz`.`Дата заказа`,
  `model avto`.model,
  `klient u zakaz`.`Адрес заказа`
FROM `model avto`
  INNER JOIN obivka
    ON `model avto`.id_odivka = obivka.id_obivka
  INNER JOIN korobka
    ON `model avto`.id_korobka = korobka.id_korobka
  INNER JOIN color
    ON `model avto`.id_color = color.id_color
  INNER JOIN `klient u zakaz`
    ON `klient u zakaz`.id_model = `model avto`.id_model
WHERE color.color = 'Красный'