

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolar_actual`
--

CREATE TABLE IF NOT EXISTS `dolar_actual` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `valor` varchar(4) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `dolar_actual`
--

INSERT INTO `dolar_actual` (`id`, `valor`, `fecha`) VALUES
(1, '', '26/13/2005'),
(2, '1111', ''),
(3, '2222', ''),
(4, '2222', ''),
(5, '3333', ''),
(6, '4444', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolar_futuro`
--

CREATE TABLE IF NOT EXISTS `dolar_futuro` (
  `posicion` varchar(5) NOT NULL,
  `cotizacion` varchar(5) NOT NULL,
  `variacion` varchar(5) NOT NULL,
  `id` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `dolar_futuro`
--

INSERT INTO `dolar_futuro` (`posicion`, `cotizacion`, `variacion`, `id`) VALUES
('5', '6', '7', 1),
('8', '9', '10', 2),
('11', '12', '13', 3),
('10', '11', '12', 4),
('13', '14', '15', 5),
('16', '17', '18', 6),
('19', '20', '21', 7),
('22', '23', '24', 8),
('25', '25', '27', 9),
('28', '29', '30', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE IF NOT EXISTS `informes` (
  `id_informe` int(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `rutaimg` varchar(100) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  PRIMARY KEY (`id_informe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id_informe`, `titulo`, `descripcion`, `rutaimg`, `fecha`) VALUES
(2, 'pijaso mal', 'lalalalal', 'tito.jpg', '2014-03-18'),
(3, 'la vida loca', 'pipipiipippipipipipipippiip', 'soja2.jpg', '2014-03-18'),
(4, 'tetetetet', 'ñdlksdfñlfskfdskñl', 'bar10.jpg', '0000-00-00'),
(5, 'tititititiit', 'pipipipipipippipipip', 'ctragos.jpg', '26/05/2010'),
(6, 'vergamota', 'pito parado', 'pene.jpg', '12/25/46'),
(7, 'cada vez menos trabajo', 'ta complicado agarrar laburo por cualquier lado en el mundo.', 'trigo.jpg', '26/05/2010'),
(8, 'nuevo', 'descripcion', 'C:wamp	mpphp24FB.tmp', '26/05/2010'),
(9, 'pene erecto', 'fififiifffffffffffffffffffffffffffffffffffffffffffff', 'palestra.jpg', '10/06/05'),
(10, 'tito el bambino', 'kkkkkkkkkkkkkkkkkkkkkkkkk', 'palestra.jpg', '26/05/2010'),
(11, 'Trinchera de la tecnología a prueba de la coyuntura', 'RAMALLO.- Más allá de los problemas que enfrentan por la intervención del Gobierno en los mercados, los productores se corrieron por un instante del frente de batalla de la coyuntura y llegaron de manera masiva a la trinchera de la tecnología de Expoagro, que los recibió con una batería de últimas tendencias que permiten ya no sólo producir más, sino hacerlo de manera eficiente, con ahorro de recursos y con un impacto amigable con el ambiente.\r\n\r\nEn rigor, la muestra, que finaliza hoy en el establecimiento El Umbral, en el kilómetro 214 de la autopista Buenos Aires-Rosario, fue la prueba más cabal de que a pesar de las dificultades actuales en el sector el espíritu del productor por conocer qué hay de nuevo en tecnologías está intacto.\r\n\r\nUn ejemplo de esto tiene que ver con las tendencias en agricultura de precisión, la estrella de esta exposición, que muestra novedades en rubros como fertilización, aplicación de agroquímicos, siembra, pilotos automáticos, plataformas inteligentes.', 'campo1.jpg', '26/05/2010'),
(12, 'Nidera presentó novedades en soja y en maíz', 'RAMALLO.- La empresa Nidera presentó durante la soleada jornada inaugural de Expoagro 2014 los exponentes de la avanzada genética que llegarán a los productores para la próxima siembra. Son en total unos 20 nuevos cultivares entre los que se destacan renovadas variedades de las Súper Sojas BT, como parte de su estrategia por mantener el liderazgo en materia de rindes.\r\n\r\nA pocos metros de la autopista Buenos Aires-Rosario, a la altura del kilómetro 214, en el establecimiento El Umbral, Guillermo Alonso, referente de Servicio Técnico de Nidera, encabezó el miércoles último una recorrida por el espacio de la compañía en la exposición en la que se presentaron las novedades.\r\n\r\nTras 8 años de trabajo, Nidera lanzó oficialmente sus variedades elite con el gen RR2, para el control de malezas, y con el gen BT, que permite un efectivo control de las principales orugas que atacan al cultivo. "Hay zonas del país donde la soja BT va a entrar muy fuerte porque reúne características como rápido vigor al nacimiento, tolerancia al estrés hídrico, tecnología contra la isoca bolillera y crecimiento indeterminado. Estamos muy contentos porque la tecnología está funcionando a pleno", comentó Alonso.\r\n\r\nLa oferta diversificada de Nidera con sus líneas RR1 y RR2BT apunta a mantener su liderazgo en el mercado local. La NS 5019 Ipro fue destacada como una de las que va a tener mayor protagonismo como variedad indeterminada y de muy buen porte.', 'campo2.jpg', '26/05/2010'),
(13, 'Los productores no ocultan el desánimo', 'RAMALLO.- Las abundantes lluvias de febrero trajeron alivio a muchos de los hombres del campo. Sin embargo, éstas no alcanzaron para lograr un cambio en las expectativas, ya que los condicionantes del contexto no sólo persisten, sino que se agudizaron: inflación, costos, presión tributaria y financiación.\r\n\r\nExpoagro 2014 reunió, durante cuatro días hasta hoy, a los grandes jugadores del sector agropecuario. La tradicional picada de CREA, que se realizó al cierre de la primera jornada, sirvió como espacio de intercambio entre productores, referentes de entidades y empresarios sobre los ánimos y expectativas del sector.\r\n\r\n"Si bien las condiciones climáticas mejoraron, las expectativas y el humor de la gente no cambiaron porque se sabe que esto puede diluirse si no hay cambios", señaló Jorge Latuf, coordinador general de CREA.\r\n\r\nLa falta de un marco de previsibilidad y de horizontes condicionan especialmente las campañas de trigo y maíz. Según Latuf, la incertidumbre hace que sólo se aboquen a estos cultivos quienes no tienen otra opción.', 'campo3.jpg', '26/05/2010'),
(14, '   Campo      Ingresar                        Últimas noticias     Secciones     Edición impresa    ', 'RAMALLO (De un enviado especial).- El ministro de Asuntos Agrarios bonaerense, Alejandro Topo Rodríguez, dijo que profundizará el diálogo con los productores de la provincia para "conseguir soluciones y resultados".\r\n\r\nEn Expoagro , el funcionario destacó las reuniones que mantuvo el gobernador bonaerense, Daniel Scioli, con la Mesa Agropecuaria provincial, integrada por las entidades gremiales.\r\n\r\nTambién consideró positivas las reuniones del Consejo de Desarrollo del Sudoeste y la Comisión de Sanidad de la Provincia.\r\n\r\nEn Expoagro, el ministro y el presidente del Banco Provincia, Gustavo Marangoni, anunciaron el financiamiento a tasa cero y en un plazo de 270 días la compra de semillas, fertilizantes y agroquímicos para la siembra de trigo de la campaña 2014/15.\r\n\r\nPor su parte, Marangoni, informó que el Banco Provincia cuenta "un fondeo de 1100 millones de pesos para financiar con tasa subsidiada la producción de carne, leche, trigo, maíz y girasol" durante el transcurso de este año.', 'campo4.jpg', '26/05/2010'),
(15, 'Cómo integrar la política agropecuaria', 'Mientras esta nueva crisis nos sumerge y arrastra sin rumbo, tarde o temprano tendremos que decidirnos entre hacer cambios "tácticos" para salir simplemente a flote o transformaciones "estratégicas" para reinsertarnos en el mundo.\r\n\r\nLa geopolítica de los alimentos, los flujos del mundo financiero y los activos subvaluados en la Argentina son tres factores que podríamos aprovechar para iniciar un ciclo de recuperación si generamos un shock de confianza que garantice seguridad jurídica, reglas de juego claras y previsibles, respeto a las instituciones y lucha contra la corrupción e impunidad. Y no es una utopía: el actual boom de inversiones y reformas en Perú se asemeja a Chile en los 90, el milagro colombiano capturó un récord de inversiones extranjeras durante 2013 después de años de violencia y Paraguay es la otra revelación de los mercados tras la salida de Lugo.\r\n\r\nSi la Argentina regresa como país emergente podría aprovechar sus ventajas únicas en la cadena agroindustrial y complementarse con países deficitarios en alimentos que necesitan proveedores competitivos y confiables. Estos tienen como estrategia disminuir su dependencia en los grandes grupos internacionales y que sus empresas estatales/fondos soberanos desarrollen su propia originación a través de joint ventures o alianzas con empresas privadas (desde grupos de siembra, exportadores, industrias integradas, redes de acopios o distribuidores) como plataformas iniciales de originación.', 'campo5.jpg', '26/05/2010'),
(16, 'Maquinaria agrícola y camionetas se lucirán en Expoagro 2014', 'El miércoles próximo comienza una nueva edición de Expoagro en el establecimiento El Umbral, ubicado en el kilómetro 214 de la autopista Buenos Aires-Rosario. La muestra, que concluirá el sábado próximo, se caracteriza por la amplia oferta de maquinaria agrícola innovadora. Entre los equipos se destacan los siguientes:\r\n\r\nApache: la empresa Apache será una vez más la sembradora oficial de Expoagro. Allí estarán no sólo sus tradicionales y potentes modelos 54000 y 27000, y la pequeña sembradora 450 -un versátil modelo para lotes chicos- sino que también la empresa aprovechará la ocasión para mostrar novedades y nuevos modelos.\r\n\r\nApache presentará en el marco de la feria la pulverizadora autopropulsada Cherokee 3227 TOP, con trochas de 2,62 y 2,18 metros, con motor Deutz de 143 hp, con mayor despeje y un rodado de 12,4 x 46, un equipamiento especialmente desarrollado por la compañía para trabajos exigentes. Por otro lado, podrá verse el descompactador 5400, los mixers de 6 y 13 metros, y la tolva AGA2700, además de la completa línea de tractores Apache Solís.', 'campo6.jpg', '26/05/2010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizarra`
--

CREATE TABLE IF NOT EXISTS `pizarra` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `especie` varchar(15) NOT NULL,
  `rosario` varchar(10) NOT NULL,
  `darsena` varchar(10) NOT NULL,
  `necochea` varchar(10) NOT NULL,
  `bahia_blanca` varchar(10) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pizarra`
--

INSERT INTO `pizarra` (`id`, `especie`, `rosario`, `darsena`, `necochea`, `bahia_blanca`, `fecha`) VALUES
(1, 'trigo', '1', '1', '1', '1', '03/05/2005'),
(2, 'trigo art. 1.2', '2.2', '2.2', '2.2', '2.2', '0000-00-00'),
(3, 'maiz', '3', '3', '3', '3', '0000-00-00'),
(4, 'sorgo', '4.4', '4.4', '4.4', '4.4', '0000-00-00'),
(5, 'girasol', '5', '5', '5', '5', '0000-00-00'),
(6, 'soja', '6', '6', '6', '6', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
