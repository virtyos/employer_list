<?php

class m141123_1192403_create_DB extends \yii\db\Migration
{
    public function up()
    {
      $sql = <<<SQL
-- --------------------------------------------------------

--
-- Структура таблицы `emp_employer`
--

CREATE TABLE IF NOT EXISTS `emp_employer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(150) NOT NULL,
  `is_working` tinyint(4) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_group` (`id_group`,`id_skill`),
  KEY `id_skill` (`id_skill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- СВЯЗИ ТАБЛИЦЫ `emp_employer`:
--   `id_group`
--       `emp_group` -> `id`
--   `id_skill`
--       `emp_skill` -> `id`
--

--
-- Дамп данных таблицы `emp_employer`
--

INSERT INTO `emp_employer` (`id`, `last_name`, `is_working`, `id_group`, `id_skill`) VALUES
(1, 'Иванов', 0, 1, 1),
(2, 'Петров', 1, 1, 3),
(3, 'Сидоров', 1, 7, 3),
(4, 'Артемов', 0, 9, 8),
(5, 'Антонов', 1, 4, 7),
(6, 'Варфоломеев', 1, 7, 7),
(7, 'Рогов', 1, 10, 3),
(13, 'Павлов', 1, 3, 3),
(14, 'Маленков', 1, 4, 6),
(15, 'Минин', 1, 9, 5),
(16, 'Краснов', 1, 1, 9),
(17, 'Чернов', 1, 5, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `emp_group`
--

CREATE TABLE IF NOT EXISTS `emp_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `emp_group`
--

INSERT INTO `emp_group` (`id`, `name`) VALUES
(1, 'Группа 1'),
(2, 'Группа 2'),
(3, 'Группа 3'),
(4, 'Группа 4'),
(5, 'Группа 5'),
(6, 'Группа 6'),
(7, 'Группа 7'),
(8, 'Группа 8'),
(9, 'Группа 9'),
(10, 'Группа 10');

-- --------------------------------------------------------

--
-- Структура таблицы `emp_skill`
--

CREATE TABLE IF NOT EXISTS `emp_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `emp_skill`
--

INSERT INTO `emp_skill` (`id`, `name`) VALUES
(1, 'Навык 2'),
(2, 'Навык 3'),
(3, 'Навык 4'),
(4, 'Навык 5'),
(5, 'Навык 6'),
(6, 'Навык 7'),
(7, 'Навык 8'),
(8, 'Навык 9'),
(9, 'Навык 10');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `emp_employer`
--
ALTER TABLE `emp_employer`
  ADD CONSTRAINT `emp_employer_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `emp_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emp_employer_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `emp_skill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SQL;
      $this->execute($sql);
    }

    public function down()
    {
        echo "m141123_1192403_create_DB cannot be reverted.\n";
        return false;
    }
}