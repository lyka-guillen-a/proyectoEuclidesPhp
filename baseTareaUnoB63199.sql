
create database tareauno

use tareauno

--
-- Estructura de tabla para la tabla `estilosexpromrec`
--

create TABLE estilosexpromrec (
  sexo varchar(250) NOT NULL,
  recinto varchar(250) NOT NULL,
  promedio float NOT NULL,
  CA int NOT NULL,
  EC int NOT NULL,
  EA int NOT NULL,
  ORR int NOT NULL,
  CAEC int NOT NULL,
  EAOR int NOT NULL,
  estilo varchar(250) NOT NULL,
  estiloId int NOT NULL,
  recintoId int NOT NULL,
  sexoId int NOT NULL
) 

--
-- Volcado de datos para la tabla `estilosexpromrec`
--

INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.17, 15, 15, 19, 12, 0, 7, 'ACOMODADOR', 1, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 6.33, 16, 17, 18, 19, -1, -1, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.07, 15, 13, 17, 17, 2, 0, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 6.6, 19, 13, 13, 20, 6, -7, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Turrialba', 7.77, 19, 11, 14, 17, 8, -3, 'ASIMILADOR', 2, 2, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.87, 18, 12, 21, 14, 6, 7, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.53, 11, 19, 16, 16, -8, 0, 'DIVERGENTE', 4, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7, 19, 14, 19, 18, 5, 1, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8, 16, 17, 16, 15, -1, 1, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.9, 19, 11, 19, 17, 8, 2, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.5, 19, 16, 13, 16, 3, -3, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7, 13, 14, 21, 13, -1, 8, 'ACOMODADOR', 1, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.4, 21, 14, 12, 18, 7, -6, 'ASIMILADOR', 2, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.41, 16, 15, 18, 19, 1, -1, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.2, 18, 10, 22, 13, 8, 9, 'CONVERGENTE', 3, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.5, 17, 15, 13, 18, 2, -5, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.82, 15, 17, 19, 15, -2, 4, 'ACOMODADOR', 1, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.54, 20, 15, 15, 12, 5, 3, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.41, 17, 15, 15, 17, 2, -2, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.11, 12, 17, 12, 21, -5, -9, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.25, 21, 10, 11, 23, 11, -12, 'ASIMILADOR', 2, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.06, 17, 13, 19, 14, 4, 5, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.75, 11, 15, 20, 16, -4, 4, 'ACOMODADOR', 1, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.09, 13, 15, 22, 13, -2, 9, 'ACOMODADOR', 1, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 6.14, 17, 13, 16, 15, 4, 1, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.72, 17, 13, 21, 14, 4, 7, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.68, 15, 16, 13, 17, -1, -4, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.5, 16, 11, 20, 12, 5, 8, 'CONVERGENTE', 3, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.94, 14, 15, 15, 17, -1, -2, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.86, 18, 11, 21, 18, 7, 3, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 6.62, 14, 11, 18, 15, 3, 3, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.13, 16, 17, 14, 21, -1, -7, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Turrialba', 6.88, 17, 13, 22, 11, 4, 11, 'CONVERGENTE', 3, 2, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 8.5, 16, 15, 18, 15, 1, 3, 'ACOMODADOR', 1, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7, 19, 18, 20, 11, 1, 9, 'ACOMODADOR', 1, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.83, 12, 15, 16, 18, -3, -2, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.13, 9, 21, 18, 17, -12, 1, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.63, 18, 11, 17, 14, 7, 3, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.06, 10, 17, 17, 17, -7, 0, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.72, 16, 14, 19, 14, 2, 5, 'ACOMODADOR', 1, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.63, 19, 12, 18, 15, 7, 3, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 7.32, 17, 13, 20, 13, 4, 7, 'CONVERGENTE', 3, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.25, 17, 14, 16, 18, 3, -2, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.72, 20, 13, 11, 19, 7, -8, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.39, 10, 15, 16, 19, -5, -3, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.78, 20, 12, 18, 12, 8, 6, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.62, 19, 17, 15, 18, 2, -3, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8, 16, 12, 14, 19, 4, -5, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.83, 17, 13, 16, 15, 4, 1, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.5, 15, 12, 14, 23, 3, -9, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8, 11, 16, 17, 19, -5, -2, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.06, 17, 12, 21, 15, 5, 6, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.14, 19, 14, 21, 9, 5, 12, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.44, 15, 14, 17, 15, 1, 2, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8, 20, 10, 18, 12, 10, 6, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.75, 14, 18, 13, 14, -4, -1, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.34, 15, 16, 12, 20, -1, -8, 'DIVERGENTE', 4, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.33, 18, 14, 13, 17, 4, -4, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 0, 18, 14, 17, 18, 4, -1, 'asimilador', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.84, 17, 14, 12, 18, 3, -6, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.29, 19, 8, 12, 21, 11, -9, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.79, 20, 15, 15, 15, 5, 0, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.5, 7, 19, 19, 15, -12, 4, 'ACOMODADOR', 1, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.39, 19, 11, 21, 12, 8, 9, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7.43, 21, 10, 20, 10, 11, 10, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 8.43, 14, 9, 24, 14, 5, 10, 'CONVERGENTE', 3, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.8, 17, 14, 18, 14, 3, 4, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.2, 12, 15, 18, 14, -3, 4, 'ACOMODADOR', 1, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.3, 17, 13, 17, 16, 4, 1, 'ASIMILADOR', 2, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Paraiso', 9, 17, 11, 18, 18, 6, 0, 'ASIMILADOR', 2, 1, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 6.57, 14, 14, 20, 13, 0, 7, 'ACOMODADOR', 1, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Mujer', 'Turrialba', 7.63, 14, 16, 20, 13, -2, 7, 'ACOMODADOR', 1, 2, 1);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.83, 17, 13, 20, 16, 4, 4, 'CONVERGENTE', 3, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 7.69, 13, 14, 16, 15, -1, 1, 'DIVERGENTE', 4, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Paraiso', 7, 18, 12, 17, 16, 6, 1, 'ASIMILADOR', 2, 1, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.23, 14, 16, 19, 15, -2, 4, 'ACOMODADOR', 1, 2, 2);
INSERT INTO estilosexpromrec (sexo, recinto, promedio, CA, EC, EA, ORR, CAEC, EAOR, estilo, estiloId, recintoId, sexoId)  values ('Hombre', 'Turrialba', 8.64, 11, 15, 18, 14, -4, 4, 'ACOMODADOR', 1, 2, 2);




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--
CREATE TABLE profesores (
  age int NOT NULL,
  gender varchar(250) NOT NULL,
  evaluation varchar(250) NOT NULL,
  times int NOT NULL,
  expertise varchar(250) NOT NULL,
  skill varchar(250) NOT NULL,
  webBased varchar(250) NOT NULL,
  webSite varchar(250) NOT NULL,
  class varchar(250) NOT NULL,
  classId int NOT NULL,
  genderId int NOT NULL,
  evaluationId int NOT NULL,
  expertiseId int NOT NULL,
  skillId int NOT NULL,
  webBasedId int NOT NULL,
  webSiteId int NOT NULL
) 

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'F', 'I', 1, 'ND', 'A', 'N', 'S', 'Beginner', 1, 1, 2, 2, 2, 1, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'NA', 'I', 2, 'DM', 'H', 'S', 'S', 'Beginner', 1, 3, 2, 1, 3, 2, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'M', 'B', 2, 'ND', 'L', 'N', 'S', 'Beginner', 1, 2, 1, 2, 1, 1, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'M', 'I', 1, 'DM', 'A', 'S', 'N', 'Beginner', 1, 2, 2, 1, 2, 2, 1);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'F', 'B', 2, 'DM', 'A', 'S', 'O', 'Beginner', 1, 1, 1, 1, 2, 2, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'NA', 'I', 3, 'DM', 'L', 'O', 'N', 'Beginner', 1, 3, 2, 1, 1, 3, 1);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'M', 'B', 1, 'DM', 'A', 'O', 'N', 'Beginner', 1, 2, 1, 1, 2, 3, 1);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'F', 'B', 3, 'O', 'L', 'O', 'O', 'Beginner', 1, 1, 1, 3, 1, 3, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (3, 'F', 'I', 1, 'ND', 'H', 'O', 'S', 'Beginner', 1, 1, 2, 2, 3, 3, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'M', 'I', 3, 'ND', 'H', 'S', 'S', 'Intermediate', 2, 2, 2, 2, 3, 2, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'NA', 'I', 1, 'O', 'H', 'N', 'O', 'Intermediate', 2, 3, 2, 3, 3, 1, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'NA', 'B', 2, 'O', 'A', 'O', 'N', 'Intermediate', 2, 3, 1, 3, 2, 3, 1);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'M', 'B', 3, 'ND', 'A', 'O', 'O', 'Intermediate', 2, 2, 1, 2, 2, 3, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'NA', 'B', 3, 'O', 'H', 'O', 'S', 'Intermediate', 2, 3, 1, 3, 3, 3, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (1, 'NA', 'A', 1, 'O', 'A', 'S', 'O', 'Intermediate', 2, 3, 3, 3, 2, 2, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (2, 'F', 'I', 3, 'O', 'H', 'S', 'O', 'Advanced', 3, 1, 2, 3, 3, 2, 3);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (2, 'NA', 'I', 2, 'ND', 'L', 'N', 'S', 'Advanced', 3, 3, 2, 2, 1, 1, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (2, 'F', 'A', 3, 'DM', 'L', 'O', 'N', 'Advanced', 3, 1, 3, 1, 1, 3, 1);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (2, 'F', 'A', 1, 'O', 'H', 'S', 'S', 'Advanced', 3, 1, 3, 3, 3, 2, 2);
INSERT INTO profesores (age, gender, evaluation, times, expertise, skill, webBased, webSite, class, classId, genderId, evaluationId, expertiseId, skillId, webBasedId, webSiteId) VALUES (2, 'M', 'I', 2, 'ND', 'H', 'S', 'S', 'Advanced', 3, 2, 2, 2, 3, 2, 2);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recintoestilo`
--

CREATE TABLE recintoestilo (
  recinto varchar(250) NOT NULL,
  CA int NOT NULL,
  EC int NOT NULL,
  EA int NOT NULL,
  ORR int NOT NULL,
  CAEC int NOT NULL,
  EAOR int NOT NULL,
  estilo varchar(250) NOT NULL,
  recintoId int NOT NULL,
  estiloId int NOT NULL
) 

--
-- Volcado de datos para la tabla `recintoestilo`
--


INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 15, 19, 12, 0, 7, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 17, 18, 19, -1, -1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 13, 17, 17, 2, 0, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 13, 13, 20, 6, -7, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 11, 14, 17, 8, -3, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 12, 21, 14, 6, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 11, 19, 16, 16, -8, 0, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 14, 19, 18, 5, 1, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 17, 16, 15, -1, 1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 11, 19, 17, 8, 2, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 16, 13, 16, 3, -3, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 14, 21, 13, -1, 8, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 21, 14, 12, 18, 7, -6, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 15, 18, 19, 1, -1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 10, 22, 13, 8, 9, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 13, 18, 2, -5, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 17, 19, 15, -2, 4, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 15, 15, 12, 5, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 15, 17, 2, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 17, 12, 21, -5, -9, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 21, 10, 11, 23, 11, -12, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 13, 19, 14, 4, 5, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 15, 20, 16, -4, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 15, 22, 13, -2, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 13, 16, 15, 4, 1, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 13, 21, 14, 4, 7, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 16, 13, 17, -1, -4, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 11, 20, 12, 5, 8, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 15, 15, 17, -1, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 11, 21, 18, 7, 3, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 11, 18, 15, 3, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 17, 14, 21, -1, -7, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 13, 22, 11, 4, 11, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 15, 18, 15, 1, 3, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 18, 20, 11, 1, 9, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 15, 16, 18, -3, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 9, 21, 18, 17, -12, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 11, 17, 14, 7, 3, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 10, 17, 17, 17, -7, 0, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 14, 19, 14, 2, 5, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 12, 18, 15, 7, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 13, 20, 13, 4, 7, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 14, 16, 18, 3, -2, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 13, 11, 19, 7, -8, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 10, 15, 16, 19, -5, -3, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 20, 12, 18, 12, 8, 6, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 17, 15, 18, 2, -3, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 12, 14, 19, 4, -5, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 13, 16, 15, 4, 1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 12, 14, 23, 3, -9, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 16, 17, 19, -5, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 12, 21, 15, 5, 6, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 14, 21, 9, 5, 12, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 14, 17, 15, 1, 2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 10, 18, 12, 10, 6, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 18, 13, 14, -4, -1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 16, 12, 20, -1, -8, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 14, 13, 17, 4, -4, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 14, 17, 18, 4, -1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 14, 12, 18, 3, -6, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 8, 12, 21, 11, -9, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 20, 15, 15, 15, 5, 0, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 7, 19, 19, 15, -12, 4, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 11, 21, 12, 8, 9, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 21, 10, 20, 10, 11, 10, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 9, 24, 14, 5, 10, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 14, 18, 14, 3, 4, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 15, 18, 14, -3, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 13, 17, 16, 4, 1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 11, 18, 18, 6, 0, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 14, 20, 13, 0, 7, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 20, 13, -2, 7, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 13, 20, 16, 4, 4, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 14, 16, 15, -1, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 12, 17, 16, 6, 1, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 19, 15, -2, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 15, 18, 14, -4, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 14, 20, 15, 3, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 11, 14, 19, 5, -5, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 12, 18, 14, 5, 4, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 20, 14, 19, 10, 6, 9, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 16, 20, 10, 0, 10, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 13, 19, 14, 2, 5, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 14, 17, 14, 0, 3, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 20, 13, 14, 12, 7, 2, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 22, 10, 18, 12, 12, 6, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 15, 17, 18, 0, -1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 13, 19, 14, 4, 5, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 17, 13, 23, -1, -10, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 12, 17, 18, 3, -1, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 15, 16, 21, -4, -5, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 12, 19, 16, 5, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 17, 19, 15, -3, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 9, 23, 10, 10, 13, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 13, 21, 14, 1, 7, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 17, 18, -2, -1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 12, 15, 16, 4, -1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 15, 16, 13, 3, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 17, 14, 18, -3, -4, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 13, 22, 12, 3, 10, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 15, 19, 16, -2, 3, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 15, 18, 17, 0, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 8, 18, 18, 9, 0, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 10, 15, 20, 8, -5, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 15, 19, 9, 3, 10, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 15, 20, 15, 0, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 18, 15, -2, 3, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 11, 22, 13, 5, 9, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 11, 16, 20, 14, -5, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 14, 17, 14, 5, 3, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 16, 17, 14, 1, 3, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 15, 20, 14, 1, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 14, 20, 16, 0, 4, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 13, 21, 15, 0, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 11, 15, 20, 8, -5, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 17, 14, 20, 8, 3, 12, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 24, 12, 12, 14, 12, -2, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 18, 14, 13, 18, 4, -5, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 10, 21, 18, 13, -11, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 9, 16, 20, 17, -7, 3, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 12, 18, 14, 8, 4, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 12, 24, 11, 6, 13, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 15, 19, 14, 1, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 15, 21, 12, -1, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 14, 22, 12, 1, 10, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 14, 18, 14, 1, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 13, 20, 13, 1, 7, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 15, 14, 2, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 15, 16, 13, 3, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 16, 9, 20, 1, -11, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 12, 20, 11, 5, 9, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 13, 19, 13, 2, 6, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 17, 14, 13, 0, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 16, 19, 14, 1, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 18, 14, -2, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 24, 9, 12, 16, 15, -4, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 15, 18, 14, -1, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 15, 18, 2, -3, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 21, 14, 18, 11, 7, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 14, 22, 15, 1, 7, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 14, 14, 15, 5, -1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 15, 15, 12, 5, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 14, 18, 13, 3, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 13, 20, 18, 1, 2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 10, 18, 15, 6, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 16, 22, 12, 0, 10, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 11, 20, 15, 2, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 17, 19, 14, -2, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 13, 19, 12, 5, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 16, 14, 19, 0, -5, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 18, 16, 16, -7, 0, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 13, 22, 13, -1, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 14, 16, 14, 2, 2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 16, 16, 11, 0, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 22, 13, 2, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 13, 19, 17, 0, 2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 16, 16, 18, 1, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 17, 13, 16, 0, -3, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 7, 20, 15, 12, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 12, 20, 14, 4, 6, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 13, 19, 14, 4, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 13, 22, 12, -1, 10, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 14, 12, 21, 1, -9, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 11, 16, 19, 7, -3, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 13, 21, 12, 1, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 12, 19, 12, 5, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 11, 18, 16, 9, 2, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 9, 21, 15, 9, 6, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 15, 19, 13, -2, 6, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 13, 19, 13, 3, 6, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 19, 12, 16, 17, 7, -1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 14, 18, 17, -1, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 15, 19, 14, -1, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 17, 15, 15, 0, 0, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 20, 13, 20, 15, 7, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 16, 16, 18, -3, -2, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 10, 21, 16, 7, 5, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 21, 11, 16, 14, 10, 2, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 24, 12, 17, 18, 12, -1, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 18, 21, 12, -1, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 13, 19, 14, 0, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 14, 16, 16, 19, -2, -3, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 15, 22, 14, 0, 8, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 15, 19, 14, -3, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 15, 8, 19, 16, 7, 3, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 12, 15, 22, 6, -7, 'ASIMILADOR', 2, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 17, 16, 2, 1, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 21, 11, 18, 13, 10, 5, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 12, 14, 17, 19, -2, -2, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 14, 20, 15, 0, 5, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 12, 18, 17, 1, 1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 16, 16, 16, -2, 0, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 14, 19, 10, 5, 9, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 15, 14, 14, 4, 0, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 13, 21, 15, 0, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 15, 18, 18, 13, -3, 5, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 12, 17, 19, 13, -5, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 16, 19, 13, 0, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 14, 20, 15, 0, 5, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 14, 17, 19, -2, 2, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 19, 14, 19, 10, 5, 9, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 16, 19, 13, 0, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 13, 21, 15, 0, 6, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 13, 12, 18, 17, 1, 1, 'DIVERGENTE', 1, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 22, 10, 18, 14, 12, 4, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 18, 14, 2, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 14, 17, 10, 4, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 12, 20, 12, 1, 8, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 14, 20, 15, 2, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 19, 11, 16, -8, -5, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 14, 11, 19, 18, 3, 1, 'ASIMILADOR', 1, 2);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 16, 10, 20, 15, 6, 5, 'CONVERGENTE', 1, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Paraiso', 9, 16, 24, 13, -7, 11, 'ACOMODADOR', 1, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 22, 10, 18, 14, 12, 4, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 13, 12, 20, 12, 1, 8, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 14, 20, 15, 2, 5, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 16, 16, 22, 13, 0, 9, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 12, 12, 22, 28, 0, -6, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 15, 18, 14, 2, 4, 'ACOMODADOR', 2, 1);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 11, 19, 11, 16, -8, -5, 'DIVERGENTE', 2, 4);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 18, 14, 17, 10, 4, 7, 'CONVERGENTE', 2, 3);
INSERT INTO recintoestilo (recinto, CA, EC, EA, ORR, CAEC, EAOR, estilo, recintoId, estiloId) VALUES ('Turrialba', 17, 10, 20, 19, 7, 1, 'ASIMILADOR', 2, 2);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--
CREATE TABLE redes (
  id int NOT NULL,
  reliability int NOT NULL,
  numLines int NOT NULL,
  capacity varchar(250) NOT NULL,
  costo varchar(250) NOT NULL,
  class varchar(250) NOT NULL,
  capacityId int NOT NULL,
  costoId int NOT NULL,
  classId int NOT NULL
)
--
-- Volcado de datos para la tabla `redes`
--


INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (1, 2, 7, 'High', 'High', 'A', 3, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (2, 2, 16, 'High', 'High', 'A', 3, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (3, 2, 9, 'Medium', 'High', 'A', 2, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (4, 2, 14, 'Medium', 'High', 'A', 2, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (5, 2, 11, 'Medium', 'Low', 'A', 2, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (6, 2, 12, 'Medium', 'Low', 'A', 2, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (7, 2, 10, 'Medium', 'Medium', 'A', 2, 2, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (8, 2, 13, 'Medium', 'Medium', 'A', 2, 2, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (9, 3, 15, 'High', 'High', 'A', 3, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (10, 3, 17, 'Low', 'Low', 'A', 1, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (11, 3, 18, 'Low', 'Low', 'A', 1, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (12, 3, 15, 'Medium', 'High', 'A', 2, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (13, 3, 16, 'Medium', 'High', 'A', 2, 3, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (14, 3, 11, 'Medium', 'Low', 'A', 2, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (15, 3, 13, 'Medium', 'Low', 'A', 2, 1, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (16, 3, 17, 'Medium', 'Medium', 'A', 2, 2, 1);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (17, 5, 19, 'High', 'Medium', 'B', 3, 2, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (18, 4, 18, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (19, 5, 19, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (20, 5, 18, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (21, 4, 18, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (22, 4, 18, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (23, 4, 19, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (24, 4, 19, 'High', 'Medium', 'B', 3, 2, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (25, 5, 18, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (26, 4, 19, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (27, 4, 19, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (28, 4, 19, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (29, 4, 18, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (30, 5, 19, 'High', 'Medium', 'B', 3, 2, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (31, 4, 19, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (32, 4, 19, 'Medium', 'High', 'B', 2, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (33, 4, 17, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (34, 5, 20, 'High', 'High', 'B', 3, 3, 2);
INSERT INTO redes (id, reliability, numLines, capacity, costo, class, capacityId, costoId, classId) VALUES (35, 4, 18, 'Medium', 'High', 'B', 2, 3, 2);

