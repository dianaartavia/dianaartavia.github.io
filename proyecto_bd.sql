-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_recetas
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `receta_tb`
--

DROP TABLE IF EXISTS `receta_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receta_tb` (
  `id_receta` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `tiempo_preparacion` varchar(45) NOT NULL,
  `tiempo_coccion` varchar(45) NOT NULL,
  `tiempo_total` varchar(45) NOT NULL,
  `porciones` varchar(45) NOT NULL,
  `complejidad` varchar(45) NOT NULL,
  `ocasion` varchar(45) NOT NULL,
  `destacada` varchar(2) DEFAULT NULL,
  `cantidad_votos` int DEFAULT NULL,
  `descripcion` varchar(1500) NOT NULL,
  `ingredientes` varchar(1000) NOT NULL,
  `instrucciones` varchar(3000) NOT NULL,
  PRIMARY KEY (`id_receta`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receta_tb`
--

LOCK TABLES `receta_tb` WRITE;
/*!40000 ALTER TABLE `receta_tb` DISABLE KEYS */;
INSERT INTO `receta_tb` VALUES (2,'Batido verde','Bebidas','slide15.png','5 minutos','0 minutos','5 minutos','2','Fácil','Verano','No',0,'Este Batido Verde Vegano es delicioso y muy saludable. Hecho 100% con alimentos integrales, es buenísimo para nuestra salud.','3 tazas agua fría,\r 2 bananas\r, 1 taza copos de avena,\r 1/4 taza mantequilla de cacahuete sin procesar crudivegana,\r 2 cucharadas semillas de lino\r, 120 g espinacas baby,\r 2 cucharadas arándanos rojos secos deshidratados','En una batidora de alta velocidad, combina todos los ingredientes y bate hasta obtener una consistencia suave. Sirve en vasos / jarras y ¡qué aproveche!'),(3,'Helado de Chocolate','Postres','receta2.png','10 minutos','45 minutos','55 minutos','8','Intermedio','Todas',NULL,NULL,'El mejor helado vegano que puedes probar. Sólo se necesitan 4 ingredientes, es muy saludable e increíblemente cremoso.','1 lata de leche de coco (400 ml ó 15 oz),\r ½ taza de sirope de agave (160 g)\r, 1 y ½ tazas de anacardos crudos y sin sal (200 g)\r, 4 cucharadas de cacao en polvo sin azúcar','Dejamos los anacardos en remojo durante al menos 4 horas.\r Batimos todos los ingredientes en una batidora de vaso. Guardamos la mezcla en la nevera para que se enfríe durante al menos 4 horas, mejor toda la noche.\r Nosotros usamos una heladera y seguimos las instrucciones. Básicamente lo que hicimos fue dejar la noche anterior el recipiente de la heladera en el congelador y al día siguiente echar la mezcla poco a poco con la máquina en funcionamiento. Luego la dejamos haciendo el helado durante unos 30 minutos. Una vez que el helado esté listo se puede comer directamente.\r Podemos guardar el helado en un recipiente hermético en el congelador durante una o dos semanas. Os recomiendo que lo saquéis un rato antes de comerlo porque estará muy duro.\r \r Notas: \r - Puedes sustituir el sirope de agave por cualquier otro endulzante.\r - No he probado a hacer este helado sin heladera, pero supongo que funcionará, aunque no quedará con una consistencia tan cremosa. Tenéis que meter el bol con la mezcla en el congelador durante 7 u 8 horas dependiendo de la textura que queráis conseguir. Para que no salgan cristales, hay que removerlo cada media hora durante al menos las 2 ó 3 primeras horas.'),(4,'Hamburguesas de lentejas con nueces','Almuerzo','slide3.png','10 minutos','8 minutos','18 minutos','4','Avanzado','Cumpleaños',NULL,NULL,'Las hamburguesas son una comida rápida muy versátil que puede ser saludable perfectamente sin echar mano de ingredientes raros ni complicadas técnicas.\r\nPrueba a hacer estas hamburguesas y variarlas a tu gusto con otros ingredientes para crear tus propias hamburguesas diferentes. Sin gluten, sin soja... ¡a tu medida!','1 taza de lentejas cocidas y escurridas,\r 1 taza de avena en copos,\r ¼ de taza de gluten de trigo en polvo\r, 3 cucharadas de salsa de soja,\r ½ taza de nueces peladas y picadas,\r ¼ de cucharadita de cebolla en polvo\r, ¼ de cucharadita de ajo en polvo,\r ¼ de cucharadita de salvia,\r ¼ de cucharadita de romero\r, ¼ de taza de agua\r Aceite de oliva para dorar las hamburguesas','En un bol machaca las lentejas con la avena y las nueces. Agrega el resto de ingredientes y mézclalo muy bien hasta que quede una masa consistente.\r Haz las hamburguesas de tamaño y grosor normal, con unas 2 cucharadas de masa, y hazlas a la plancha unos 4 minutos por cada lado a fuego medio.'),(5,'Sopa de lentejas al curry','Sopas','receta5.png','10 minutos','30 minutos','40 minutos','5','Fácil','Semana Santa','',0,'Esta sopa de lentejas al curry vegana es muy fácil de preparar y perfecta para una cena rápida una noche fría. Está hecha de una mezcla de ingredientes muy económicos y saludables, y es muy deliciosa! Sírvela en un bol o añádele arroz para conseguir incluso más comida por un poco de dinero más!','1 cucharada de aceite,\r\n 1 cebolla mediana picada,\r\n 2 dientes de ajo picados,\r\n 2 cucharadas de jengibre picado\r\n, 1 cucharada de curry en polvo ajústalo dependiendo de lo fuerte que sea tu curry en polvo,\r\n ½ cucharadita de pimienta roja opcional si tu curry en polvo no es picante,\r\n 2 zanahorias medianas peladas y cortadas en cubitos pequeños\r\n, 2 patatas medianas peladas y cortadas en cubitos pequeños,\r\n 170 gramos de lentejas secas marrones enjuagadas,\r\n 710 ml (3 tazas) de caldo de verduras\r\n, 125 gramos de espinaca congelada cortada,\r\n 1 lata (400 ml) de leche de coco\r\n, 1 cucharadita de sal o al gusto','Calienta el aceite en una olla mediana, a fuego medio. Añade la cebolla y fríelo hasta que quede suave y transparente. Luego, añade el jengibre y el ajo, y fríelos otros 30 segundos-1 minuto o hasta que queden suaves.\r\n Añade el curry en polvo y la pimienta roja (si utilizas), y fríelos, removiéndolos constantemente, durante 30 segundos para liberar los aromas.\r\n Añade las zanahorias, patatas, lentejas y caldo de verduras. Aumenta el calor hasta que empiece a hervir, luego cúbrelos y reduce el fuego al mínimo.\r\n Déjalo a fuego lento, cubierto, poco a poco hasta que las lentejas estén tiernas – unos 30 minutos. Compruébalo de vez en cuando para asegurarte de que las lentejas se sumergen. Añade más caldo o agua para que se queden sumergidas si es necesario.\r\n Una vez que estén tiernas, añade la espinaca congelada y la leche de coco. Aumenta el fuego al medio, y deja que se cocine durante otro par de minutos hasta que esté caliente.'),(6,'Samosas vegetales','Entradas','receta3.png','1 hora','20 minutos','1 hora y 20 minutos','20','Fácil','Todas','',0,'Un clásico de la cocina india que podemos rellenar con lo que más nos guste, cambiando las verduras o agregando otras especias y hierbas. Hay que comprobar que la masa filo que compremos esté elaborada con aceite; por lo demás, es un bocado sencillo al que nadie se resiste.','1 Cebolla,\r\n 2 Zanahoria pequeña,\r\n 2 Patata pequeña,\r\n 8 Espárragos trigueros\r\n Garam masala, 1 cucharadita\r\n Curry molido, 1/2 cucharadita\r\n Comino molido, 1/2 cucharadita\r\n Jengibre molido, 1/2 cucharadita\r\n Sal\r\n Pimienta negra molida,\r\n Caldo de verduras\r\n 250 ml,\r\n Aceite de oliva virgen extra\r\n, 5 Láminas de masa filo','Lavamos bien los espárragos, retiramos los extremos inferiores y cortamos en discos de un centímetro. Pelamos y cortamos en dados las patatas y añadimos ambas verduras a la cacerola. Rehogamos un par de minutos antes de incorporar las especias. Removemos para que se mezclen bien y suelten sus aromas.\r\n A continuación añadimos el caldo de verduras y cocinamos, mejor tapado, hasta que la patata esté tierna y el caldo se haya evaporado. Puede llevar 18-20 minutos, dependiendo del tipo de patata y del tamaño de los trozos. Si la mezcla se seca antes de que la patata esté tierna, añadimos un poco más de caldo. Enfriamos antes de proseguir con las samosas.\r\n Una vez esté frío el relleno nos ponemos manos a la obra con el montaje de las samosas. Cortamos una lámina de masa filo en cuatro tiras, a lo largo (guarda las que no uses bajo un paño de cocina húmedo para que no se sequen). Colocamos una cucharada de relleno en un extremo y doblamos en forma de triángulo tal y como se muestra en las fotos del paso a paso.\r\n Cuando lleguemos a la mitad, pincelamos con aceite el resto de la masa y continuamos doblando hasta terminar. Repetimos la operación tantas veces como sea necesario hasta terminar con el relleno. Colocamos las samosas en una bandeja de horno cubierta con papel vegetal, pincelamos con un poco más de aceite y cocemos en el horno, precalentado a 200 ºC con calor arriba y abajo, durante 18-20 minutos o hasta que estén doradas.'),(7,'Leche de Avellanas y Cacao','Bebidas','receta6.png','10 minutos','0 minutos','10 minutos','3','Fácil','Navidad','',0,'La leche de avellanas y cacao le encanta a los niños y a los mayores. Es muy fácil de hacer y sólo necesitas 4 ingredientes. ¡Te va a encantar!','3 tazas de agua (750 mililitros),\r\n1 taza de avellanas crudas y sin sal (150 gramos),\r\n4 dátiles,\r\n2 cucharadas de cacao en polvo sin azúcar o de algarroba en polvo','La noche anterior pon las avellanas en remojo en un recipiente con agua. Este paso es opcional, aunque si puedes te recomiendo que lo hagas.\r\nAl día siguiente cuela las avellanas y lávalas con un poco de agua.\r\nEn un robot de cocina o batidora añadimos las avellanas y el agua y batimos durante 1 ó 2 minutos.\r\nColamos la leche de avellanas con una gasa, tela o con un colador muy fino para separar el líquido de los restos de almendras.\r\nEcha la leche en una batidora con el cacao y los dátiles y vuelve a batir.\r\nGuarda la leche en un recipiente hermético o botella de vidrio en la nevera durante 3 ó 4 días.'),(8,'Baileys vegano','Bebidas','receta7.png','5 minutos','0 minutos','5 minutos','500 mililitros','Fácil','Navidad','No',0,'Nosotros aún no podemos creer que esté tan rico y que sea tan fácil de preparar, de hecho, nos ha gustado más que la versión original, entre otras cosas porque sabe menos a alcohol, aunque si a vosotros os gusta más cargado le añadís más whiskey y listo.','75 mililitros de whiskey,\r\n50 mililitros de café,\r\n1 cucharadita de extracto de vainilla (opcional),\r\n400 mililitros de leche de coco,\r\n4 cucharadas de sirope de agave (o cualquier otro sirope o melaza)','En una batidora o robot de cocina añadimos todos los ingredientes y batimos durante unos 2 minutos hasta que se integren completamente. Conservar en la nevera y agitar antes de consumirlo.'),(9,'Donuts saludables','Postres','receta8.png','15 minutos','15 minutos','30 minutos','12','Intermedio','Cumpleaños','',0,'Estos donuts no tienen el mismo sabor y consistencia que los tradicionales, pero están riquísimos y se pueden consumir en nuestro día a día sin problemas porque están hechos con ingredientes saludables, además, son veganos y bajos en grasa, ¿qué más se les puede pedir?','1 taza de harina de avena o copos de avena molidos (130 g),\r\n1 taza de harina de trigo sarraceno (120 g),\r\n½ taza de panela molida, azúcar de coco o moreno (100 g),\r\n1 cucharadita de bicarbonato,\r\n2 plátanos,\r\n1 taza de leche de coco (240 g),\r\n1 cucharada de vinagre de manzana,\r\n8 cucharadas de sirope de agave,\r\n4 cucharaditas de cacao en polvo sin azúcar','Precalentamos el horno a 200ºC ó 390ºF. \r\nPodéis usar harina de avena o moler copos de avena simplemente batiéndolos en una batidora potente. \r\nEchamos la harina de avena, la de trigo sarraceno, la panela o el azúcar y el bicarbonato en un bol y removemos. Reservamos. \r\nEn una batidora batimos los plátanos con la leche y el vinagre. \r\nEchamos la mezcla líquida en el bol y mezclamos bien todos los ingredientes hasta que estén bien integrados (ver la tercera foto). \r\nPodéis engrasar el molde de donuts con un poquito de aceite si queréis para que los donuts no se peguen, aunque si es un molde antiadherente no es imprescindible. \r\nRepartimos la mezcla entre los huecos del molde, llenando aproximadamente las ¾ partes.\r\nHorneamos durante unos 15 minutos o hasta que se doren. \r\nSacamos del horno y dejamos enfriar. \r\nMezlamos el agave y el cacao con ayuda de una cuchara o tenedor hasta que estén bien integrados. \r\nCuando los donuts estén fríos, los mojamos en el frosting por uno de los lados y decoramos con coco rallado y nueces troceadas o con los ingredientes que queráis.'),(10,'Helados de Almendra con Cobertura de Chocolate','Postres','receta9.png','20 minutos','0 minutos','20 minutos','7','Fácil','Verano','',0,'Los helados son una forma deliciosa de refrescarnos en verano, el problema es que están llenos de azúcares, colorantes, aditivos y las opciones veganas son muy limitadas. La buena noticia es que puedes hacerlos en casa, es muy fácil y económico y puedes usar tus ingredientes preferidos.','2 plátanos,\r\n1 taza de leche de almendras (250 ml),\r\n1 cucharada de sirope de arce,\r\n4 cucharadas de crema de almendras,\r\n3 cucharadas de aceite de coco,\r\n⅓ taza de chocolate negro (100 g)','Bate todos los ingredientes de los polos en una batidora hasta que estén bien integrados. \r\nReparte la mezcla entre los moldes y mételos en el congelador durante 45 minutos. \r\nSaca los polos y coloca los palos. Algunos moldes traen una tapa incluida, en ese caso puedes ponerla al principio, aunque a mi personalmente me gusta más como quedan los palos de madera. \r\nVuelve a meterlos en el congelador durante unas 3 horas o hasta que estén completamente solidificados. \r\nPara hacer la cobertura pon el aceite y el chocolate en un cazo a fuego bajo hasta que se derrita el chocolate. Aparta la mezcla del fuego y mientras desmolda los polos. \r\nPara hacer la cobertura, echa parte de la mezcla en un plato y baña los polos por ambos lados. Si le vas a echar trocitos de almendra, date prisa porque se seca enseguida.'),(11,'Muffins con Chips de Chocolate','Postres','receta10.png','5 minutos','25 minutos','30 minutos','12','Avanzado','Cumpleaños',NULL,NULL,'Estos muffins veganos con chips de chocolate son los muffis más ricos que he probado nunca, además, son mucho más sanos y ligeros.','4 plátanos,\r\n1/2 taza de leche de almendras (122 g),\r\n2 y 1/2 tazas de harina de trigo integral (375 g),\r\n1 y 1/2 cucharaditas de bicarbonato,\r\n1/2 taza de azúcar de coco (95 g),\r\n1/4 taza de aceite de oliva virgen extra o de aceite de coco (50 g),\r\n1 cucharadita de extracto de vainilla (opcional),\r\n1/2 taza de chips de chocolate (90 g),','Precalienta el horno a 180ºC o 355ºF. \r\nBate los plátanos y la leche de almendras en una batidora hasta que estén completamente integrados. \r\nEn un bol grande mezcla la harina y el bicarbonato. Echa la mezcla de plátanos y leche de almendras, el azúcar, el aceite y el extracto de vainilla y remueve hasta que la masa esté homogénea y sin grumos. Echa las chips de chocolate y vuelve a remover. \r\nEngrasa el molde con un poquito de aceite y llénalo casi entero como puedes ver en las fotos. Yo utilizo una cuchara de helado (la que se usa para hacer las bolas) para repartir la masa, pero no es necesaria. Puedes echar 4 ó 5 chips de chocolate por encima de cada muffin para que queden más bonitos. \r\nHornea los muffins durante unos 20 ó 25 minutos o hasta que estén hechos. Si metes un palito de madera o de metal y sale limpio es que están hechos. Espera 5 minutos antes de desmoldar y déjalos enfriar sobre una rejilla antes de comerlos.'),(12,'Pimientos Rellenos','Almuerzo','receta11.png','10 minutos','40 minutos','50 minutos','3','Intermedio','Día de la madre',NULL,NULL,'Pimientos rellenos, deliciosos, veganos y muy fáciles de preparar. Están riquísimos, son muy saludables y requieren de solo 9 ingredientes.','2 o 3 pimientos (yo usé uno verde, uno amarillo y uno rojo),\r\n3/4 taza de arroz cocinado (150 g),\r\n3/4 taza de alubias rojas cocinadas o de bote (130 g),\r\n3/4 taza de salsa (200 g),\r\n1/4 taza de maíz (35 g),\r\n1/4 taza de levadura nutricional o de cerveza (4 cucharadas),\r\n1 cucharadita de comino en polvo,\r\n1/4 cucharadita de sal,\r\n1/8 cucharadita de pimienta negra molida','Precalienta el horno a 180ºC o 350ºF. \r\nLava los pimientos, córtalos por la mitad y retira las semillas. \r\nHornéalos en una bandeja para horno con papel de hornear durante 20 minutos. \r\nEn un bol echa el resto de ingredientes y remueve hasta que estén bien integrados. \r\nSaca los pimientos del horno, rellénalos y hornéalos durante 20 minutos más. \r\nAñade queso rallado vegano de forma opcional y hornea de 5 a 10 minutos más. \r\nSírvelos directamente con proteína vegetal tipo seitán o tempeh para que sea un plato aún más completo o decóralos con tus toppings preferidos. \r\nPuedes guardar los pimientos rellenos en la nevera en un recipiente hermético durante 3 o 4 días.'),(13,'Hamburgesas Veganas de Alubias Negras','Almuerzo','recetas12.png','10 minutos','20 minutas','30 minutos','4 a 5 ','Intermedio','Día del padre',NULL,NULL,'Estas hamburguesas veganas de alubias negras son altas en fibra y proteína y bajas en grasa. Se preparan en 30 minutos y están increíblemente sabrosas.','2 tazas de alubias negras cocinadas o de bote (380 g),\r\n1 y 1/2 tazas de copos de avena (120 g), sin gluten si es necesario,\r\n1/4 taza de levadura nutricional o de cerveza (4 cucharadas),\r\n2 cucharadas de semillas de lino molidas,\r\n1 cucharada de tamari o salsa de soja,\r\n1 cucharada de cebolla en polvo,\r\n1 cucharada de ajo en polvo,\r\n2 cucharaditas de pimentón dulce,\r\n2 cucharaditas de comino en polvo','Puedes usar alubias de bote o cocinar tus propias alubias siguiendo las instrucciones del paquete. Si vas a cocinarlas utiliza 1 taza de alubias negras secas (190 g). Cuela y lava las alubias si son de bote y si son cocinadas, simplemente cuélalas.  \r\nEcha las alubias en un bol grande y machácalas con ayuda de un tenedor, pisa patatas, pasapurés o batidora de mano. A mi me gusta más usar una batidora de mano para que quede con una consistencia más uniforme. \r\nEcha el resto de ingredientes y vuelve a machacar o a batir hasta que todos los ingredientes estén perfectamente integrados. Si la masa está muy blanda, puedes añadir más avena y si está muy seca, un poquito de algún líquido como agua, caldo de verduras o leche vegetal. \r\nDivide la masa entre 4 ó 5 trozos, haz bolas con las manos y aplástalas para darles forma de hamburguesa. \r\nYo las cociné al grill sin aceite durante unos 5 ó 10 minutos o hasta que se doraron, pero si quieres puedes añadir un poco de aceite. También las puedes cocinar a la parrilla o en una sartén a fuego medio-alto. \r\nDisfrútalas tal cuál o con pan y tus ingredientes preferidos (las de la foto llevaban pan integral, tahini, ketchup, rodajas de tomate, lechuga y cebolla morada). También puedes guardarlas en un recipiente hermético en la nevera durante unos 4 ó 5 días.'),(14,'Sopa de Verduras','Sopas','receta13.png','10 minutos','35 minutos','45 minutos','6','Avanzado','Navidad',NULL,NULL,'Sopa de verduras, una receta sencilla, reconfortante y nutritiva, que se prepara con ingredientes sencillos y naturales. ¡Está deliciosa!','2 cucharadas de aceite de oliva virgen extra,\r\n4 dientes de ajo, troceados,\r\n2 ramitas de apio, troceadas,\r\n1 cebolla, troceada,\r\n2 patatas medianas (450 g o 1 libra), peladas y troceadas,\r\n2 zanahorias grandes (225 g o 8 oz), peladas y troceadas,\r\n1 taza de maíz congelado o de lata (140 g),\r\n1 taza de judías verdes congeladas (120 g),\r\n1 taza de guisantes congelados (120 g),\r\n1 lata de tomates grande (800 g ó 28 oz),\r\n4 tazas de caldo de verduras o agua (1 litro),\r\n1 cucharada de condimento italiano, o cualquier hierba seca como orégano o albahaca,\r\n1/4 cucharadita de sal,\r\n1/4 cucharadita de pimienta negra molida,','Echa el aceite en un olla y cuando esté caliente añade el ajo, el apio y la cebolla. Cocina a fuego medio-alto hasta que se doren. \r\nAñade el resto de ingredientes y cocina a fuego alto hasta que rompa a hervir. Entonces baja a fuego medio, cubre parcialmente y cocina la sopa durante unos 30 minutos o hasta que la patata y la zanahoria estén tiernas. \r\nSirve inmediatamente con garbanzos o tofu al horno, o acompáñala con seitán para disfrutar de una comida deliciosa y nutritiva.  \r\nGuarda las sobras en un recipiente hermético en la nevera durante 5-7 días o en el congelador por un máximo de 6 meses. '),(15,'Papas al Horno','Desayuno','receta4.png','10 minutos','25 minutos','35 minutos','2','Fácil','Todas',NULL,NULL,'Patatas al horno, una guarnición deliciosa, hecha con patatas, aceite, hierbas y especias. Es una receta fácil y sencilla y puedes adaptarla a tu gusto.','450 g de patatas (1 libra), peladas y en dados,\r\n1-2 cucharadas de aceite de oliva virgen extra,\r\n2 cucharaditas de condimento italiano,\r\n1/2 cucharadita de sal,\r\n1/2 cucharadita de ajo en polvo,\r\n1/2 cucharadita de pimentón,\r\n1/8 cucharadita de pimienta negra molida','Precalienta el horno a 200ºC ó 400ºF. \r\nEcha las patatas en un bol junto con el resto de ingredientes y remueve hasta que estén bien integrados (yo prefiero usar mis manos). \r\nPon las patatas en una bandeja para horno con papel para hornear y hornea durante unos 20-30 minutos o hasta que se doren y estén tiernas (las mías tardaron 25 minutos). \r\nSirve inmediatamente o guarda las sobras en un recipiente hermético en la nevera durante unos 5-7 días.'),(16,'Bol de Açai','Desayuno','receta14.png','5 minutos','0 minutos','5 minutos','1 a 2','Fácil','Todas',NULL,NULL,'Este bol de açai es una opción muy sana para desayunar, se prepara en menos de 5 minutos y está buenísimo. Además, el açai es un superalimento muy nutritivo.','2 plátanos congelados,\r\n1 taza de arándanos frescos (150 g),\r\n1/3 taza de leche de almendras (85 ml),\r\n1/2 rama de vainilla (opcional),\r\n2 cucharadas de açai en polvo','Troceamos los plátanos y los ponemos en el congelador la noche anterior. \r\nAbrimos la vaina de vainilla longitudinalmente con un cuchillo y raspamos el interior, que es lo que vamos a usar. Descartamos el exterior y reservamos. \r\nEchamos los plátanos congelados, los arándanos, la leche, la vainilla y el açai en polvo en una batidora y batimos hasta que estén perfectamente integrados. \r\nServimos con nuestros toppings preferidos. Nosotros le echamos arándanos, kiwi y nueces.'),(17,'Taquitos de Caramelo y Manzana','Postres','receta15.png','10 minutos','35 minutos','45 minutos','5','Avanzado','Día del niño',NULL,NULL,'Taquitos de caramelo y manzana, un postre sencillo, crujiente, dulce y muy sabroso. La combinación de salsa de caramelo vegana y manzana es exquisita.','Aceite de coco (opcional),\r\n2 manzanas Granny Smith, peladas y troceadas,\r\n3 cucharadas + 1 cucharadita de azúcar moreno,\r\n1/2 + 1/8 cucharadita de canela en polvo,\r\n1/2 cucharadita de extracto de vainilla (opcional),\r\n2 cucharaditas de harina, yo usé harina de arroz integral,\r\n1/4 taza de salsa de caramelo vegana (65 ml),\r\n5 tortillas pequeñas','Precalienta el horno a 190ºC ó 375ºF.\r\nEcha 1 cucharada de aceite de coco en una sartén y cuando esté caliente añade la manzana, 3 cucharadas de azúcar moreno y 1/2 cucharadita de canela en polvo, remueve y cocina a fuego medio-alto durante unos 5 minutos, removiendo de vez en cuando. Si no quieres usar aceite, puedes añadir agua. \r\nAñade el extracto de vainilla y la harina, remueve y cocina durante 1 minuto más. \r\nEcha la salsa de caramelo vegana, remueve y retira del fuego. \r\nPinta un molde para horno de 20x20 cm (8x8 pulgadas) con aceite de coco (opcional). Reserva. \r\nPara montar los taquitos pon una tortilla en un plato y añade 1/5 parte del relleno de manzana en un extremo (como puedes ver en la foto) y enrolla. Repite con el resto de tortillas y del relleno hasta formar 5 taquitos y colócalos en el molde boca abajo. \r\nPinta los taquitos con un poco de aceite de coco (opcional) y espolvorea azúcar con canela por encima. Para hacer el azúcar con canela echa 1 cucharadita de azúcar moreno y 1/8 de cucharadita de canela en polvo en una batidora de vaso  y bate hasta que se hagan polvo. Si no quieres usar aceite, puedes pintar los taquitos con un poco de agua. \r\nHornea durante unos 25 minutos o hasta que se doren. \r\nSirve inmediatamente tal cuál o con más salsa de caramelo vegana por encima. Puedes guardar las sobras en la nevera en un recipiente hermético durante 4-5 días y recalentar los taquitos o comerlos fríos.'),(18,'Macarrones con Queso Vegano de Calabaza','Almuerzo','receta16.png','15 minutos','15 minutos','30 minutos','2','Intermedio','Día del niño',NULL,NULL,'Si te gusta la pasta, tienes que probar estos macarrones con queso vegano de calabaza. La salsa no tiene colesterol, es muy cremosa y ligera.','2 tazas de calabaza pelada y cortada en dados (300 g),\r\n1/4 taza de leche de soja sin endulzar (65 ml)*,\r\n2 cucharadas de aceite de oliva virgen extra**,\r\n1 cucharadita de cebolla en polvo,\r\n1/2 cucharadita de ajo en polvo,\r\n1 ó 1 y 1/2 cucharaditas de sal marina,\r\n4 cucharadas de levadura nutricional o levadura de cerveza,\r\n1 cucharada de zumo de limón,\r\n200 g ó 7 oz de macarrones con o sin gluten,\r\nPerejil fresco para decorar (opcional)','Cocinamos la calabaza al vapor durante 10 minutos o hasta que esté tierna. Yo uso una olla con una canastita, añado agua sin que llegue a tocar el fondo de la canasta y cuando rompe a hervir echo la calabaza y la cocino tapada a fuego medio alto. También podéis cocerla u hornearla, lo que prefiráis. \r\nEchamos la calabaza en una batidora junto con el resto de ingredientes de la salsa. Batimos hasta que estén perfectamente integrados. \r\nCocemos la pasta hasta que esté a nuestro gusto. Lo ideal es seguir las indicaciones del paquete, aunque nosotros no le añadimos sal. Para ahorrar tiempo, podéis cocinar la pasta a la vez que la calabaza. \r\nMezclamos la pasta y la salsa en la olla. \r\nServimos los macarrones y los decoramos con un poco de perejil fresco picado (opcional). Podéis guardar la pasta en un tupper o fiambrera en la nevera y os durará unos 3 ó 4 días. Se puede recalentar y congelar sin problemas, aunque tendréis que echarle un poquito de leche porque la salsa se quedará más densa.'),(19,'Quiche vegana','Almuerzo','receta17.png','10 minutos','40 minutos','50 minutos','8','Avanzado','Cumpleaños',NULL,NULL,'Quiche vegana, deliciosa, reconfortante ¡y muy sabrosa y fácil de preparar! Es perfecta para comer y cenar e ideal para una ocasión especial.','Masa quebrada o pasta brisa vegana,\r\n2 cucharadas de aceite de oliva virgen extra,\r\n2 dientes de ajo, laminados,\r\n1/2 cebolla, picada,\r\n2 tazas de champiñones (150 g), laminados,\r\n1 taza de tomates cherry (180 g), cortados por la mitad,\r\n3 tazas de espinacas baby frescas (90 g),\r\n400 g tofu firme, sin el líquido,\r\n2 cucharadas de levadura de cerveza,\r\n2 cucharadas de leche vegetal sin endulzar, yo usé leche de soja,\r\n1 cucharada de harina de maíz,\r\n1/2 cucharadita de pimienta negra molida,\r\n1/2 cucharadita de sal,\r\n1/2 cucharadita de sal negra o kala namak, también puedes usar más sal normal y omitir esta,\r\n1/4 de cucharadita de cúrcuma','Precalienta el horno a 200ºC o 400ºF. \r\nCalienta el aceite en una sartén y echa el ajo y la cebolla. Cocina a fuego medio hasta que se empiecen a dorar. \r\nAñade los champiñones y los tomates cherry y cocina hasta que se doren. \r\nLuego añade las espinacas y cocina hasta que se ablanden. \r\nRetira la sartén del fuego y deja reposar. \r\nEcha el resto de ingredientes (tofu, levadura nutricional, leche vegetal, harina de maíz, pimienta, sal, sal negra y cúrcuma) en una batidora y bate hasta que estén bien integrados. \r\nCubre un molde redondo de 22 cm (9 pulgadas) con masa quebrada. \r\nEcha la mitad de las verduras salteadas por encima de la masa, cúbrelas con el relleno de tofu y echa las verduras restantes por encima. \r\nHornea durante 35 o 45 minutos. Retira del horno y deja reposar durante 15 minutos para que se enfríe un poco antes de cortar. \r\nPuedes servir tu quiche vegana caliente o fría. \r\nGuarda las sobras en un recipiente hermético en la nevera durante 5 o 7 días o en el congelador por un máximo de 3 meses.'),(20,'Palomitas','Entradas','recetas18.png','5 minutos','5 minutos','10 minutos','4','Fácil','Día del niño',NULL,NULL,'Aprende a hacer palomitas de forma fácil con 5 ingredientes vegetales en tan solo 10 minutos. ¡Son veganas y están riquísmas!','2-4 cucharadas de aceite de oliva viren extra, ver notas si no tomas aceite,\r\n1/2 taza de maíz para hacer palomitas (105 g),\r\n1/4 taza de levadura nutricional o de cerveza (4 cucharadas),\r\n2 cucharaditas de ajo en polvo,\r\n1-2 cucharaditas de sal','Echa el aceite en una olla con tapa, mejor si la tapa es transparente. Nosotros le echamos 2 cucharadas, pero si le echas más, tendrán más sabor y se pegarán mejor la levadura, el ajo en polvo y la sal. Calienta el aceite con la tapa puesta a fuego medio-alto. \r\nEcha 3 o 4 granos de maíz, vuelve a poner la tapa y, cuando estallen y se conviertan en palomitas, echa el resto. Lo ideal es agitar un poco la olla de vez en cuando para evitar que se peguen. \r\nCuando los granos dejen de estallar, apaga el fuego, echa el resto de ingredientes y agita bien la olla para que las palomitas se impregnen bien. Aún así, es normal que parte de la levadura, el ajo en polvo y la sal caigan al fondo y no se impregnen bien al 100%. También puedes removerlas con ayuda de una espátula además de agitar la olla para que se impregnen mejor. \r\nSirve tus palomitas de maíz inmediatamente. \r\nGuarda las sobras en un recipiente hermético a temperatura ambiente durante unos 5-7 días.'),(21,'Palitos de Aguacate','Entradas','receta19.png','15 minutos','25 minutos','40 minutos','2 a 4','Fácil','Día de la madre',NULL,NULL,'Los palitos de aguacate son un aperitivo muy saludable y fácil de preparar. Sólo necesitas 7 ingredientes y están para chuparse los dedos.','1 aguacate que no esté muy maduro,\r\n2 cucharadas de harina, nosotros usamos de arroz integral,\r\n1/2 cucharadita de ajo en polvo,\r\n1/4 cucharadita de sal,\r\nUna pizca de pimienta negra molida,\r\n2 cucharadas de leche vegetal, nosotros usamos leche de soja,\r\n1/3 taza de levadura nutricional o levadura de cerveza (20 g),\r\nSalsa mexicana (opcional)','Precalienta el horno a 180ºC ó 350ºF. \r\nEcha la harina, el ajo en polvo, la sal y la pimienta en un plato hondo y remueve hasta que estén bien integrados. Echa la leche y la levadura nutricional o de cerveza por separado en otros dos platos hondos. \r\nCorta el aguacate por la mitad, descarta el hueso, pélalo y córtalo en tiras (nosotros hicimos 6 tiras de cada mitad). \r\nReboza las tiras de aguacate primero en la harina, luego en la leche y por último en la levadura nutricional o de cerveza. \r\nPon los palitos de aguacate sobre una bandeja para horno con papel de hornear y hornea durante unos 25 minutos o hasta que se doren. \r\nSirve con tu salsa preferida. A nosotros nos encantan con salsa mexicana, pero también puedes usar mayonesa, alioli, ketchup, salsa de yogur o aderezo ranchero. \r\nLos palitos de aguacate están mejor recién hechos, pero puedes guardarlos en la nevera en un recipiente hermético durante 2 ó 3 días.'),(22,'Mazorcas de Maíz a la Parrilla con Alioli Verde','Entradas','receta20.png','10 minutos','40 minutos','50 minutos','2 a 4','Intermedio','Día del padre',NULL,NULL,'Las mazorcas de maíz son una opción perfecta para las barbacoas porque también se pueden preparar a la plancha o en la parrilla y el alioli está de muerte.','4 mazorcas de maíz,\r\nAceite de oliva virgen extra al gusto (opcional),\r\n1 diente de ajo,\r\n1/4 taza de leche de soja (65 ml),\r\n1/2 taza de aceite de girasol sin refinar (125 ml),\r\n1 cucharadita de vinagre de manzana,\r\nSal marina al gusto,\r\n1/2 taza de espinacas crudas (15 g)','Hay dos formas de preparar las mazorcas. Puedes cocinarlas unos 30 minutos a la plancha con un poquito de aceite al gusto (opcional) a fuego medio-alto o hasta que estén doradas y el maíz esté tierno. \r\nOtra opción es cocer primero durante 30 minutos las mazorcas a fuego medio-alto y luego otros 10 minutos también a fuego medio-alto a la plancha con un poquito de aceite al gusto (opcional) o hasta que estén doradas y el maíz esté tierno. De esta forma el maíz queda más blandito y a nosotros nos gusta más, aunque es menos simple. \r\nNosotros echamos un poquito de aceite en la carmela/plancha, pero es opcional. \r\nPara que la mayonesa no se corte, lo ideal es que los ingredientes estén a la misma temperatura. \r\nEcha el ajo, la leche, el vinagre, la sal y el aceite en el vaso de la batidora, coloca la batidora al fondo del vaso y bate a velocidad media hasta que emulsione, luego puedes hacer movimientos de abajo hacia arriba hasta que se integre perfectamente. \r\nEcha las espinacas troceadas y vuelve a batir hasta que se integren perfectamente. \r\nPrueba la mayonesa y si está sosa, echa más sal y vuelve a batirla un poco con movimientos de abajo hacia arriba hasta que la sal se integre por completo. Si la mayonesa está muy densa, echa más leche y si está muy líquida, echa más aceite. Vuelve a batir. \r\nPara hacer el alioli usamos una batidora de mano, aunque también se puede hacer en una de vaso si echáis el aceite poco a poco cuando la batidora está encendida.'),(23,'Pancakes de bananos','Desayuno','receta21.png','10 minutos','10 minutos','20 minutos','8','Fácil','Todas',NULL,NULL,'Pancakes de bananos, un desayuno o postre muy fácil, rico y saludable. Se preparan en 20 minutos con tan solo 10 ingredientes.','1 taza de harina de trigo integral (120 g),\r\n2 cucharadas de azúcar moreno, de coco o panela,\r\n2 cucharaditas de levadura química,\r\n1 cucharadita de canela en polvo,\r\n1/8 cucharadita de sal,\r\n3/4 taza de leche vegetal sin endulzar (200 ml), yo usé leche de soja,\r\n1 huevo de lino,\r\n1 plátano grande maduro (1/2 taza o 120 g machacado),\r\n1/2 cucharadita de extracto de vainilla (opcional),\r\nAceite para cocinar las tortitas (opcional)','Mezcla los ingredientes secos (la harina, el azúcar, la levadura, la canela y la sal) en un bol grande. \r\nAñade los ingredientes líquidos (la leche vegetal, el huevo de lino, el plátano machacado y el extracto de vainilla) y remueve hasta obtener una masa homogénea. \r\nEcha una gota de aceite (yo usé aceite de coco) en una sartén y espárcela con una servilleta de papel (si no quieres usar aceite puedes omitirlo, siempre y cuando tu sartén no se pegue). Cuando esté caliente echa 1/4 de taza (65 ml o 4 cucharadas) de la masa y deja que cada tortita se cocine unos 2 minutos por cada lado. Tienes que darle la vuelta a la tortita cuando los bordes estén más dorados y sea fácil darle la vuelta con ayuda de una espátula. \r\nSirve inmediatamente con tus toppings preferidos, como por ejemplo rodajas de plátano, chispas de chocolate veganas, mantequilla vegana o un poco de sirope de arce. \r\nTambién puedes acompañarlas con bebidas tipo leche dorada, batido de aguacate o hasta un buen matcha latte. \r\nGuarda las sobras en un recipiente hermético en la nevera durante 3-5 días.');
/*!40000 ALTER TABLE `receta_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_tb`
--

DROP TABLE IF EXISTS `usuario_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_tb` (
  `nombre_usuario` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `passw` varchar(45) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `img_perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nombre_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_tb`
--

LOCK TABLES `usuario_tb` WRITE;
/*!40000 ALTER TABLE `usuario_tb` DISABLE KEYS */;
INSERT INTO `usuario_tb` VALUES ('dartavia','dianaartavia@gmail.com','1234','soporte','Diana Artavia',''),('jestla','jstevenla@gmail.com','1234','administrador','Steven López','1.jpg');
/*!40000 ALTER TABLE `usuario_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 10:49:42