-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2015 a las 08:07:38
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base_face`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `contraseña`) VALUES
(1, 'd.labrasilva', 'dan0326'),
(2, 'f.figueroa', 'fernando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--

CREATE TABLE IF NOT EXISTS `colegio` (
`id_colegio` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `pagina_web` varchar(100) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `matricula_entre` int(11) NOT NULL,
  `matricula_hasta` int(11) NOT NULL,
  `mensualidad_entre` int(50) NOT NULL,
  `mensualidad_hasta` int(11) NOT NULL,
  `id_dependencia` int(11) NOT NULL,
  `grupo_socioeco` varchar(100) NOT NULL,
  `id_religion` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `ranking_nac` int(11) NOT NULL,
  `metros_constru` int(11) NOT NULL,
  `met_ense` varchar(500) NOT NULL,
  `conv_extr` varchar(500) NOT NULL,
  `act_extr` varchar(500) NOT NULL,
  `hrs_ingles` int(11) NOT NULL,
  `logr_dep` varchar(500) NOT NULL,
  `cant_alu` int(11) NOT NULL,
  `cant_prof` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colegio`
--

INSERT INTO `colegio` (`id_colegio`, `id_comuna`, `nombre`, `Foto`, `direccion`, `telefono`, `pagina_web`, `contacto`, `matricula`, `matricula_entre`, `matricula_hasta`, `mensualidad_entre`, `mensualidad_hasta`, `id_dependencia`, `grupo_socioeco`, `id_religion`, `id_idioma`, `latitud`, `longitud`, `ranking_nac`, `metros_constru`, `met_ense`, `conv_extr`, `act_extr`, `hrs_ingles`, `logr_dep`, `cant_alu`, `cant_prof`) VALUES
(1, 22, 'ALLIANCE FRANCAISE DE VALPARAISO', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Avenida Las Perdices Nº 450, Reñaca', '(56-32) 251 2000', 'www.dalembert.cl/', 'info@dalembert.cl', 'Más De $100.000', 100001, 200000, 200001, 300000, 3, 'Alto', 2, 3, '-32,960689', '-71,54139217', 2, 100, 'Tradicional', 'Universidad Alemania', 'Fútbol,Natación,Boxeo.', 50, 'Campeón regional fútbol  (2011)', 100, 85),
(2, 35, 'COLEGIO ACONCAGUA', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Camino Troncal Antiguo 01940, Paso Hondo', '(56-32)256 9562', 'www.colegioaconcagua.cl/', 'admision@colegioaconcagua.cl', 'Gratuito', 0, 0, 50001, 100000, 2, 'Medio Alto', 2, 1, '-33,040552', '-71,47583817', 3, 200, 'Tradicional', 'Universidad USA', 'Tenis', 5, 'No disponible', 100, 50),
(3, 22, 'COLEGIO CAPELLAN PASCAL', 'http://www.colegiocapellanpascal.cl/CapellanPascal/fotografias/2015/Imagen1.png', 'Guardiamarina Riquelme s/n Población Allard Las Salinas ', '(56-32) 2546500', 'www.colegiocapellanpascal.cl', 'colegio@capellanpascal.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-32,9946023', '-71,5441206', 4, 150, 'Tradicional', 'Universidad Beligca', 'Fútbol,Natación,Boxeo.', 6, 'Campeón regional fútbol(2000)  ', 200, 60),
(4, 38, 'COLEGIO CHAMPAGNAT', 'http://www.maristas.cl/data/nuestros_colegios/resumen/galeria/thumb3-visor/cch_thumb.jpg', 'Champagnat Nº 270', '(56-32)2950036', 'www.cch.maristas.cl/', 'colegio@champagnat.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-33,046693', '-71,36349217', 5, 250, 'Tradicional', 'Universidad Londres', 'Tenis', 0, 'Sin logros', 200, 70),
(5, 35, 'COLEGIO COEDUCACIONAL PART. QUILPUE', 'https://lh6.googleusercontent.com/-w03KtCAuYY8/TkBXMucsDoI/AAAAAAAALZM/KF8R0meB-tk/w1020-h685-no/SIN%2BCARTEL%2BFINAL.jpg', 'Los Carrera N° 981', ' (56-32) 2924554', 'www.colcoe.cl/', 'colcoe@gmail.com ', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-33,049749', '-71,44217917', 6, 150, 'Tradicional', 'Universidad Argentina', 'Fútbol,Natación,Boxeo.', 8, 'Campeón regional atletismo(2009)', 300, 45),
(6, 22, 'COLEGIO ESPAÑOL DE VIÑA DEL MAR', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Errázuriz 650 ', '(56-32) 2883047', 'www.colegioespanol.cl/', 'cra@colegioespanol.cl', 'Gratuito', 0, 0, 25001, 50000, 2, 'Medio Alto', 1, 1, '-33,027378', '-71,55275917', 7, 100, 'Tradicional', 'Universidad Bolivia', 'No disponible', 0, 'Campeón regional fútbol(2001)', 400, 85),
(7, 19, 'COLEGIO LEONARDO DA VINCI', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'calle calama n°47, paradero 11', '(56-33) 231 0983', 'No Disponible', 'No disponible', 'Gratuito', 0, 0, 0, 0, 1, 'Medio', 2, 1, '-32,8649974', '-71,247328', 1, 300, 'Tradicional', 'Universidad Uruguay', 'Fútbol,Natación,Boxeo.', 10, 'Sin logros', 400, 30),
(8, 22, 'COLEGIO PATMOS', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'calle Guayacán 47, esquina Agua Santa', '(56-32) 2775825', 'www.colegiopatmos.cl', 'secretaria@colegiopatmos.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 2, 1, '-33,030768', '-71,56459217', 8, 350, 'Tradicional', 'Universidad Brasil', 'Sin actividades extraprogramaticas', 0, 'Campeón regional fútbol(2002)', 500, 60),
(9, 22, 'COLEGIO SAGRADA FAMILIA', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Parcela 4, Los Pinos', '(56-32) 283 2352', 'www.colegiosagradafamilia.cl', 'csheward@colegiosagradafamilia.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-32,953305', '-71,537315', 9, 400, 'Tradicional', 'Universidad Holanda', 'Fútbol,Natación,Boxeo.', 15, 'No disponible', 500, 70),
(10, 28, 'ESCUELA JOSÉ DOMINGO SAAVEDRA', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Av. La Marina Nº 1870', '(56-32) 2231943', 'No Disponible', 'josedomingo.saavedra@gmail.com', 'Gratuito', 0, 0, 0, 0, 1, 'Medio', 2, 1, '-33,5964047', '-71,6123387', 10, 500, 'Tradicional', 'Universidad Noruega', 'Golf', 0, 'Campeón regional fútbol(2005)', 150, 30),
(11, 13, 'LICEO DARIO SALAS', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'calle jahuel Nº 729', '(56-32)2345102', 'No Disponible', 'dariosalastp@gmail.com', 'Gratuito', 0, 0, 0, 0, 1, 'Medio', 2, 1, '-32,444488', '-70,392448', 11, 450, 'Tradicional', 'Universidad Dinamarka', 'Fútbol,Natación,Boxeo.', 20, 'Campeón regional atletismo(2007)', 150, 50),
(12, 21, 'LICEO EDUARDO DE LA BARRA', 'http://www.laotravoz.cl/wp-content/uploads/2014/01/Eduardo-de-la-Barra.jpg', 'av.colon Nº2184', '(56-32) 2135323', 'www.eduardodelabarra.cl/', 'direbarra@cormuval.cl', 'Entre $1.000 y $10.000', 1000, 10000, 1000, 10000, 1, 'Medio', 2, 1, '-33,049685', '-71,61371217', 12, 150, 'Tradicional', 'Universidad España', 'Natación', 0, 'Campeón regional Basquetbol(2013)', 150, 60),
(13, 22, 'PAN AMERICAN COLLEGE VINA DEL MAR', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Calle los Pinos 45', '(56-32) 2670275 ', 'www.panamericancollege.cl/', 'claudiasoazo@live.cl', 'Entre $25.001 y $50.000', 25001, 50000, 25001, 50000, 2, 'Medio Alto', 1, 1, '-33,029743', '-71,53304517', 13, 250, 'Tradicional', 'Universidad Italia', 'Fútbol,Natación,Boxeo.', 30, 'Campeón regional atletismo(2001)', 250, 56),
(14, 22, 'SAINT PETER''S SCHOOL', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Av. Libertad 575', ' (56-32) 238 14 00 ', 'www.stpeters.cl', 'imoya@stpeters.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-33,016456', '-71,55045817', 14, 100, 'Tradicional', 'Universidad China', 'Atletismo', 0, 'Campeón regional fútbol (2007)', 250, 70),
(15, 21, 'SCUOLA ITALIANA ARTURO DELL''ORO', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Av Pedro Montt 2447', ' (56-32) 3184941', 'www.scuolaitalianavalpo.cl/', 'diresiv@scuolaitalianavalpo.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 2, 4, '-33,047582', '-71,60733117', 15, 100, 'Tradicional', 'Universidad Canada', 'Fútbol,Natación,Boxeo.', 11, 'Campeón regional Basquetbol(2006)', 600, 30),
(16, 22, 'THE MACKAY SCHOOL', 'http://www.laotravoz.cl/wp-content/uploads/2014/11/mackay-2.jpg', 'Av. Vicuña Mackenna 700, Reñaca', '(56-32)2386600', 'www.mackay.cl/', 'igutierrez@mackay.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 2, 1, '-32,972578', '-71,53503617', 16, 350, 'Tradicional', 'No disponible', 'Ping Pong', 12, 'Campeón regional fútbol (2008)', 600, 45),
(17, 22, 'COLEGIO ALEMAN DE VALPARAISO', 'http://auto.img.v4.skyrock.net/9530/35579530/pics/1733274266_small.jpg', ' Calle Alvarez 2950, Chorrillos', '(56-32)-2161505', ' www.dsvalpo.cl/ ', 'informatica@dsvalpo.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 2, 2, '-33,03903', '-71,52620817', 17, 450, 'Tradicional', 'Sin convenio', 'Fútbol,Natación,Boxeo.', 15, 'Campeón regional Basquetbol(2003)', 700, 60),
(18, 22, 'SEMINARIO SAN RAFAEL', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Alvarez 2496, ', ' (56-32) 267 0137', ' www.ssr.cl ', 'ssrvina@ssr.cl', 'Más De $100.000', 100001, 200000, 100001, 200000, 3, 'Alto', 1, 1, '-33,0632376', '-71,5426115', 18, 250, 'Tradicional', 'Sin convenio', 'Fútbol', 0, 'Campeón regional fútbol  (2012)', 750, 70),
(19, 33, 'SANTO DOMINGO COUNTRY SCHOOL', 'https://www.racc.es/cs/RACC/images/foto-no-disponible.jpg', 'Ruta 66 G-1 La Princesa, Santo Domingo', '(56-35)2420032', ' www.santodomingocs.cl/ ', 'secretaria@sdcs.cl', 'Gratuito', 0, 0, 50001, 100000, 3, 'Alto', 1, 1, '-33,381767', '-71,6885321', 19, 300, 'Tradicional', 'No  disponible', 'Fútbol,Natación,Boxeo.', 30, 'Campeón regional Basquetbol(2001),Campeón regional Natación.  ', 700, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
`id_comuna` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_provincia` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id_comuna`, `nombre`, `id_provincia`) VALUES
(1, 'La Ligua', 12),
(2, 'Cabildo', 12),
(3, 'Zapallar', 12),
(4, 'Papudo', 12),
(5, 'Petorca', 12),
(6, 'Los Andes', 13),
(7, 'San Esteban', 13),
(8, 'Calle Larga', 13),
(9, 'Rinconada', 13),
(10, 'San Felipe', 14),
(11, 'Llaillay', 14),
(12, 'Putaendo', 14),
(13, 'Santa Maria', 14),
(14, 'Catemu', 14),
(15, 'Panquehue', 14),
(16, 'La Calera', 15),
(17, 'Quillota', 15),
(18, 'Hijuelas', 15),
(19, 'La Cruz', 15),
(20, 'Nogales', 15),
(21, 'Valparaiso', 16),
(22, 'Viña del Mar', 16),
(23, 'Concón', 16),
(24, 'Quintero', 16),
(25, 'Puchuncavi', 16),
(26, 'Casablanca', 16),
(27, 'Juan Fernandez', 16),
(28, 'San Antonio', 17),
(29, 'Cartagena', 17),
(30, 'El Tabo', 17),
(31, 'El Quisco', 17),
(32, 'Algarrobo', 17),
(33, 'Santo Domingo', 17),
(34, 'Isla de Pascua', 18),
(35, 'Quilpue', 19),
(36, 'Limache', 19),
(37, 'Olmue', 19),
(38, 'Villa Alemana', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
`id_dependencia` int(11) NOT NULL,
  `dependencia` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id_dependencia`, `dependencia`) VALUES
(1, 'Municipal'),
(2, 'Particular Subvencionado'),
(3, 'Particular Pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrellas`
--

CREATE TABLE IF NOT EXISTS `estrellas` (
`id_comentario` int(11) NOT NULL,
  `id_colegio` int(11) NOT NULL,
  `val_profe` int(11) NOT NULL,
  `val_ense` int(11) NOT NULL,
  `val_infra` int(11) NOT NULL,
  `val_ubi` int(11) NOT NULL,
  `val_promedio` float NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `terminos` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estrellas`
--

INSERT INTO `estrellas` (`id_comentario`, `id_colegio`, `val_profe`, `val_ense`, `val_infra`, `val_ubi`, `val_promedio`, `nombre`, `comentario`, `perfil`, `terminos`) VALUES
(52, 3, 5, 5, 5, 5, 5, 'Daniel', 'Hola', 'apoderado', 'acepto'),
(53, 3, 3, 3, 3, 3, 3, 'asd', 'malo', 'apoderado', 'acepto'),
(54, 15, 5, 5, 5, 5, 5, 'Pedro', 'asda', 'apoderado', 'acepto'),
(55, 3, 1, 1, 4, 2, 2, 'Feña', 'hola', 'estudiante', 'acepto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
`id_idioma` int(11) NOT NULL,
  `idioma` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `idioma`) VALUES
(1, 'Ingles'),
(2, 'Aleman'),
(3, 'Frances');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `me_gusta`
--

CREATE TABLE IF NOT EXISTS `me_gusta` (
`id_me_gusta` int(11) NOT NULL,
  `ip_usuario` varchar(100) NOT NULL,
  `id_colegio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `me_gusta`
--

INSERT INTO `me_gusta` (`id_me_gusta`, `ip_usuario`, `id_colegio`) VALUES
(1, '1', 3),
(2, '0', 15),
(3, '0', 3),
(4, '200.68.62.226', 15),
(5, '::1', 3),
(6, '::1', 15),
(7, '123', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
`id_provincia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nombre`, `id_region`) VALUES
(1, 'Iquique', 1),
(2, 'Tamarugal', 1),
(3, 'Tocopilla', 2),
(4, 'El Loa', 2),
(5, 'Antofagasta', 2),
(6, 'Chañaral', 3),
(7, 'Copiapo', 3),
(8, 'Huasco', 3),
(9, 'Elqui', 4),
(10, 'Limari', 4),
(11, 'Choapa', 4),
(12, 'Petorca', 5),
(13, 'Los Andes', 5),
(14, 'San Felipe', 5),
(15, 'Quillota', 5),
(16, 'Valparaiso', 5),
(17, 'San Antonio', 5),
(18, 'Isla de Pascua', 5),
(19, 'Marga-Marga', 5),
(20, 'Cachapoal', 6),
(21, 'Colchagua', 6),
(22, 'Cardenal Caro', 6),
(23, 'Curicó', 7),
(24, 'Talca', 7),
(25, 'Linares', 7),
(26, 'Cauquenes', 7),
(27, 'Ñuble', 8),
(28, 'Biobío', 8),
(29, 'Concepción', 8),
(30, 'Arauco', 8),
(31, 'Malleco', 9),
(32, 'Cautín', 9),
(33, 'Osorno', 10),
(34, 'Llanquihue', 10),
(35, 'Chiloé', 10),
(36, 'Palena', 10),
(37, 'Coyhaique', 11),
(38, 'Aysén', 11),
(39, 'General Carrera', 11),
(40, 'Capitan Prat', 11),
(41, 'Última Esperanza', 12),
(42, 'Magallanes', 12),
(43, 'Tierra del Fuego', 12),
(44, 'Antártica Chilena', 12),
(45, 'Chacabuco', 13),
(46, 'Santiago', 13),
(47, 'Codillera', 13),
(48, 'Maipo', 13),
(49, 'Melipilla', 13),
(50, 'Talagante', 13),
(51, 'Valdivia', 14),
(52, 'Ranco', 14),
(53, 'Arica', 15),
(54, 'Parinacota', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psu`
--

CREATE TABLE IF NOT EXISTS `psu` (
  `anio` int(11) NOT NULL,
  `id_colegio` int(11) NOT NULL,
  `lenguaje_promedio` int(11) NOT NULL,
  `lenguaje_maximo` int(11) NOT NULL,
  `lenguaje_minimo` int(11) NOT NULL,
  `matematicas_promedio` int(11) NOT NULL,
  `matematicas_maximo` int(11) NOT NULL,
  `matematicas_minimo` int(11) NOT NULL,
  `lenguaje_mas_matematicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `psu`
--

INSERT INTO `psu` (`anio`, `id_colegio`, `lenguaje_promedio`, `lenguaje_maximo`, `lenguaje_minimo`, `matematicas_promedio`, `matematicas_maximo`, `matematicas_minimo`, `lenguaje_mas_matematicas`) VALUES
(2012, 1, 0, 0, 0, 0, 0, 0, 658),
(2012, 2, 0, 0, 0, 0, 0, 0, 558),
(2012, 3, 0, 0, 0, 0, 0, 0, 587),
(2012, 4, 0, 0, 0, 0, 0, 0, 655),
(2012, 5, 0, 0, 0, 0, 0, 0, 595),
(2012, 6, 0, 0, 0, 0, 0, 0, 528),
(2012, 7, 0, 0, 0, 0, 0, 0, 478),
(2012, 8, 0, 0, 0, 0, 0, 0, 557),
(2012, 9, 0, 0, 0, 0, 0, 0, 655),
(2012, 10, 0, 0, 0, 0, 0, 0, 371),
(2012, 11, 0, 0, 0, 0, 0, 0, 425),
(2012, 12, 0, 0, 0, 0, 0, 0, 532),
(2012, 13, 0, 0, 0, 0, 0, 0, 557),
(2012, 14, 0, 0, 0, 0, 0, 0, 631),
(2012, 15, 0, 0, 0, 0, 0, 0, 634),
(2012, 16, 0, 0, 0, 0, 0, 0, 637),
(2012, 17, 0, 0, 0, 0, 0, 0, 640),
(2012, 18, 0, 0, 0, 0, 0, 0, 628),
(2012, 19, 0, 0, 0, 0, 0, 0, 578),
(2013, 1, 650, 762, 510, 649, 818, 548, 649),
(2013, 2, 554, 747, 333, 574, 746, 391, 564),
(2013, 3, 586, 815, 382, 619, 850, 408, 602),
(2013, 4, 672, 815, 488, 661, 818, 485, 666),
(2013, 5, 580, 694, 448, 578, 729, 477, 579),
(2013, 6, 0, 0, 0, 0, 0, 0, 519),
(2013, 7, 421, 655, 235, 449, 606, 327, 435),
(2013, 8, 549, 715, 363, 547, 769, 391, 548),
(2013, 9, 640, 771, 510, 650, 785, 518, 645),
(2013, 10, 309, 510, 178, 357, 459, 274, 333),
(2013, 11, 0, 0, 0, 0, 0, 0, 395),
(2013, 12, 551, 771, 353, 532, 769, 246, 542),
(2013, 13, 536, 685, 413, 540, 715, 274, 538),
(2013, 14, 630, 747, 527, 602, 715, 469, 616),
(2013, 15, 622, 771, 465, 626, 785, 469, 624),
(2013, 16, 655, 806, 494, 672, 834, 493, 655),
(2013, 17, 635, 806, 521, 657, 785, 485, 646),
(2013, 18, 611, 780, 397, 603, 818, 391, 607),
(2013, 19, 522, 605, 389, 552, 715, 448, 537);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quitiles`
--

CREATE TABLE IF NOT EXISTS `quitiles` (
  `quintil` int(11) NOT NULL,
  `desde` int(11) NOT NULL,
  `hasta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id_region` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `nombre`) VALUES
(1, 'Tarapacá'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Coquimbo'),
(5, 'Valparaiso'),
(6, 'Libertador General Bernardo O´Higgins'),
(7, 'Del Maule'),
(8, 'Bio-Bio'),
(9, 'Araucania'),
(10, 'De los Lagos'),
(11, 'Aysen del General Carlos Ibañez del Campo'),
(12, 'De Magallanes y la Antartica Chilena'),
(13, 'Metropolitana'),
(14, 'De los Rios'),
(15, 'Arica y Parinacota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
`id_religion` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `religion`
--

INSERT INTO `religion` (`id_religion`, `religion`) VALUES
(1, 'Catolico'),
(2, 'Laico'),
(3, 'Evangelico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce`
--

CREATE TABLE IF NOT EXISTS `simce` (
  `anio` int(11) NOT NULL,
  `id_colegio` int(11) NOT NULL,
  `id_2bas` int(11) NOT NULL,
  `id_4bas` int(11) NOT NULL,
  `id_6bas` int(11) NOT NULL,
  `id_8bas` int(11) NOT NULL,
  `id_2med` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce`
--

INSERT INTO `simce` (`anio`, `id_colegio`, `id_2bas`, `id_4bas`, `id_6bas`, `id_8bas`, `id_2med`) VALUES
(2013, 1, 1, 1, 1, 1, 1),
(2013, 2, 1, 1, 1, 1, 1),
(2013, 3, 1, 1, 1, 1, 1),
(2013, 4, 1, 1, 1, 1, 1),
(2013, 5, 1, 1, 1, 1, 1),
(2013, 6, 1, 1, 1, 1, 1),
(2013, 7, 1, 1, 1, 1, 1),
(2013, 8, 1, 1, 1, 1, 1),
(2013, 9, 1, 1, 1, 1, 1),
(2013, 10, 1, 1, 1, 1, 1),
(2013, 11, 1, 1, 1, 1, 1),
(2013, 12, 1, 1, 1, 1, 1),
(2013, 13, 1, 1, 1, 1, 1),
(2013, 14, 1, 1, 1, 1, 1),
(2013, 15, 1, 1, 1, 1, 1),
(2013, 16, 1, 1, 1, 1, 1),
(2013, 17, 1, 1, 1, 1, 1),
(2013, 18, 1, 1, 1, 1, 1),
(2013, 19, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce_2bas`
--

CREATE TABLE IF NOT EXISTS `simce_2bas` (
  `id_colegio` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `compresion_lectora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce_2bas`
--

INSERT INTO `simce_2bas` (`id_colegio`, `anio`, `compresion_lectora`) VALUES
(1, 2013, 276),
(2, 2013, 284),
(3, 2013, 281),
(4, 2013, 287),
(5, 2013, 288),
(6, 2013, 260),
(7, 2013, 253),
(8, 2013, 260),
(9, 2013, 302),
(10, 2013, 0),
(11, 2013, 274),
(12, 2013, 0),
(13, 2013, 266),
(14, 2013, 285),
(15, 2013, 320),
(16, 2013, 275),
(17, 2013, 299),
(18, 2013, 274),
(19, 2013, 265);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce_2med`
--

CREATE TABLE IF NOT EXISTS `simce_2med` (
  `id_colegio` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `comprension_lectura` int(11) NOT NULL,
  `matematicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce_2med`
--

INSERT INTO `simce_2med` (`id_colegio`, `anio`, `comprension_lectura`, `matematicas`) VALUES
(1, 2013, 291, 295),
(2, 2013, 290, 324),
(3, 2013, 268, 333),
(4, 2013, 305, 350),
(5, 2013, 314, 338),
(6, 2013, 272, 293),
(7, 2013, 310, 324),
(8, 2013, 258, 267),
(9, 2013, 325, 368),
(10, 2013, 264, 275),
(11, 2013, 264, 267),
(12, 2013, 248, 267),
(13, 2013, 264, 286),
(14, 2013, 298, 346),
(15, 2013, 320, 342),
(16, 2013, 310, 348),
(17, 2013, 306, 353),
(18, 2013, 310, 338),
(19, 2013, 297, 326);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce_4bas`
--

CREATE TABLE IF NOT EXISTS `simce_4bas` (
  `id_colegio` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `compresion_lectora` int(11) NOT NULL,
  `matematicas` int(11) NOT NULL,
  `ciencias_naturales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce_4bas`
--

INSERT INTO `simce_4bas` (`id_colegio`, `anio`, `compresion_lectora`, `matematicas`, `ciencias_naturales`) VALUES
(1, 2013, 279, 262, 268),
(2, 2013, 278, 276, 280),
(3, 2013, 297, 308, 284),
(4, 2013, 289, 290, 288),
(5, 2013, 311, 307, 299),
(6, 2013, 292, 275, 276),
(7, 2013, 261, 280, 289),
(8, 2013, 256, 263, 264),
(9, 2013, 292, 308, 293),
(10, 2013, 240, 275, 248),
(11, 2013, 266, 279, 252),
(12, 2013, 226, 256, 248),
(13, 2013, 253, 226, 248),
(14, 2013, 289, 280, 267),
(15, 2013, 309, 296, 299),
(16, 2013, 294, 291, 301),
(17, 2013, 310, 306, 300),
(18, 2013, 285, 300, 283),
(19, 2013, 297, 288, 286);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce_6bas`
--

CREATE TABLE IF NOT EXISTS `simce_6bas` (
  `id_colegio` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `compresion_lectora` int(11) NOT NULL,
  `matematicas` int(11) NOT NULL,
  `escritura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce_6bas`
--

INSERT INTO `simce_6bas` (`id_colegio`, `anio`, `compresion_lectora`, `matematicas`, `escritura`) VALUES
(1, 2013, 289, 281, 56),
(2, 2013, 272, 291, 49),
(3, 2013, 267, 274, 55),
(4, 2013, 295, 307, 58),
(5, 2013, 292, 290, 56),
(6, 2013, 261, 270, 55),
(7, 2013, 240, 248, 49),
(8, 2013, 272, 251, 52),
(9, 2013, 305, 317, 62),
(10, 2013, 0, 0, 0),
(11, 2013, 229, 213, 46),
(12, 2013, 0, 0, 0),
(13, 2013, 251, 233, 51),
(14, 2013, 275, 281, 54),
(15, 2013, 308, 303, 60),
(16, 2013, 280, 304, 56),
(17, 2013, 288, 307, 57),
(18, 2013, 290, 308, 58),
(19, 2013, 273, 273, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simce_8bas`
--

CREATE TABLE IF NOT EXISTS `simce_8bas` (
  `id_colegio` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `compresion_lectura` int(11) NOT NULL,
  `matematicas` int(11) NOT NULL,
  `ciencias_naturales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simce_8bas`
--

INSERT INTO `simce_8bas` (`id_colegio`, `anio`, `compresion_lectura`, `matematicas`, `ciencias_naturales`) VALUES
(1, 2013, 310, 307, 306),
(2, 2013, 272, 300, 297),
(3, 2013, 263, 299, 299),
(4, 2013, 298, 318, 327),
(5, 2013, 278, 294, 307),
(6, 2013, 270, 275, 292),
(7, 2013, 248, 246, 264),
(8, 2013, 217, 238, 266),
(9, 2013, 300, 323, 327),
(10, 2013, 0, 0, 0),
(11, 2013, 264, 248, 254),
(12, 2013, 0, 0, 0),
(13, 2013, 280, 276, 280),
(14, 2013, 295, 302, 301),
(15, 2013, 310, 338, 339),
(16, 2013, 303, 310, 331),
(17, 2013, 303, 333, 326),
(18, 2013, 299, 325, 310),
(19, 2013, 283, 301, 303);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `colegio`
--
ALTER TABLE `colegio`
 ADD PRIMARY KEY (`id_colegio`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
 ADD PRIMARY KEY (`id_comuna`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
 ADD PRIMARY KEY (`id_dependencia`);

--
-- Indices de la tabla `estrellas`
--
ALTER TABLE `estrellas`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
 ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
 ADD PRIMARY KEY (`id_me_gusta`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
 ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `psu`
--
ALTER TABLE `psu`
 ADD PRIMARY KEY (`anio`,`id_colegio`), ADD KEY `id_colegio` (`id_colegio`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `religion`
--
ALTER TABLE `religion`
 ADD PRIMARY KEY (`id_religion`);

--
-- Indices de la tabla `simce`
--
ALTER TABLE `simce`
 ADD PRIMARY KEY (`anio`,`id_colegio`), ADD KEY `id_colegio` (`id_colegio`);

--
-- Indices de la tabla `simce_2bas`
--
ALTER TABLE `simce_2bas`
 ADD PRIMARY KEY (`id_colegio`,`anio`);

--
-- Indices de la tabla `simce_2med`
--
ALTER TABLE `simce_2med`
 ADD PRIMARY KEY (`id_colegio`,`anio`);

--
-- Indices de la tabla `simce_4bas`
--
ALTER TABLE `simce_4bas`
 ADD PRIMARY KEY (`id_colegio`,`anio`);

--
-- Indices de la tabla `simce_6bas`
--
ALTER TABLE `simce_6bas`
 ADD PRIMARY KEY (`id_colegio`,`anio`);

--
-- Indices de la tabla `simce_8bas`
--
ALTER TABLE `simce_8bas`
 ADD PRIMARY KEY (`id_colegio`,`anio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `colegio`
--
ALTER TABLE `colegio`
MODIFY `id_colegio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
MODIFY `id_comuna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
MODIFY `id_dependencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estrellas`
--
ALTER TABLE `estrellas`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
MODIFY `id_me_gusta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `religion`
--
ALTER TABLE `religion`
MODIFY `id_religion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dependencia`
--
ALTER TABLE `dependencia`
ADD CONSTRAINT `dependencia_ibfk_1` FOREIGN KEY (`id_dependencia`) REFERENCES `colegio` (`id_colegio`);

--
-- Filtros para la tabla `idioma`
--
ALTER TABLE `idioma`
ADD CONSTRAINT `idioma_ibfk_1` FOREIGN KEY (`id_idioma`) REFERENCES `colegio` (`id_colegio`);

--
-- Filtros para la tabla `psu`
--
ALTER TABLE `psu`
ADD CONSTRAINT `psu_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `region`
--
ALTER TABLE `region`
ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `colegio` (`id_colegio`);

--
-- Filtros para la tabla `religion`
--
ALTER TABLE `religion`
ADD CONSTRAINT `religion_ibfk_1` FOREIGN KEY (`id_religion`) REFERENCES `colegio` (`id_colegio`);

--
-- Filtros para la tabla `simce_2bas`
--
ALTER TABLE `simce_2bas`
ADD CONSTRAINT `simce_2bas_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `simce_2med`
--
ALTER TABLE `simce_2med`
ADD CONSTRAINT `simce_2med_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `simce_4bas`
--
ALTER TABLE `simce_4bas`
ADD CONSTRAINT `simce_4bas_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `simce_6bas`
--
ALTER TABLE `simce_6bas`
ADD CONSTRAINT `simce_6bas_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `simce_8bas`
--
ALTER TABLE `simce_8bas`
ADD CONSTRAINT `simce_8bas_ibfk_1` FOREIGN KEY (`id_colegio`) REFERENCES `colegio` (`id_colegio`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
