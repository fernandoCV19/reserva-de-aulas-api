<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AulasRealesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUDIT',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 270,
            'descripcion' => 'AUDITORIO NUEVO EDIF',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '612',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 210,
            'descripcion' => 'AULA 612'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '607',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 190,
            'descripcion' => 'AULA 607'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAGCIV',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 185,
            'descripcion' => 'AULA MAGNA CIVIL',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '622',
            'ubicacion' => 'CAMPUS FCYT',
            'capacidad' => 185,
            'descripcion' => 'AULA 622'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '624',
            'ubicacion' => 'CAMPUS FCYT',
            'capacidad' => 185,
            'descripcion' => 'AULA 624'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '617',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 185,
            'descripcion' => 'AULA 617'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '623',
            'ubicacion' => 'CAMPUS FCYT',
            'capacidad' => 185,
            'descripcion' => 'AULA 623'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691A',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692F',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692E',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691B',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691F',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692A',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692B',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691E',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 180,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '693A',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 160,
            'descripcion' => 'AULA 693A'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '693B',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 160,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '667A',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 155,
            'descripcion' => 'LABORATORIO 667A (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUDCIV',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 150,
            'descripcion' => 'AUDITORIO CIVIL',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '672',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 130,
            'descripcion' => 'LABORATORIO 672 (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691D',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 125,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692D',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 125,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '693D',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 125,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '693C',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 125,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692C',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 125,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '651',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 120,
            'descripcion' => 'AULA 651'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '691C',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 120,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '642',
            'ubicacion' => 'BLOQUE "TINGLADOS"',
            'capacidad' => 120,
            'descripcion' => 'AULA 642'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '669A',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 110,
            'descripcion' => 'LABORATORIO 669A (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '635',
            'ubicacion' => 'BLOQUE TALLERES CARPINT. PDTF',
            'capacidad' => 100,
            'descripcion' => 'AULA 635',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '671A',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 95,
            'descripcion' => 'LABORATORIO 671A (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '660',
            'ubicacion' => 'BLOQUE "TRENCITO"',
            'capacidad' => 90,
            'descripcion' => 'AULA 660 (TRENCITO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '661',
            'ubicacion' => 'BLOQUE "TRENCITO"',
            'capacidad' => 90,
            'descripcion' => 'AULA 661 (TRENCITO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '625C',
            'ubicacion' => 'EDIF. NUEVO FCYT',
            'capacidad' => 90,
            'descripcion' => 'AULA BIBLIOTECA FCYT'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '618',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 90,
            'descripcion' => 'AULA 618 (LABO FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '617B',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 90,
            'descripcion' => 'AULA 617B (IZQUIERDA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INFLAB',
            'ubicacion' => 'SECTOR "INFORMATICA"',
            'capacidad' => 80,
            'descripcion' => 'LABORATORIO INFORMATICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692H',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 80,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '692G',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 80,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '617C',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 80,
            'descripcion' => 'AULA 617C (DERECHA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '625D',
            'ubicacion' => 'EDIF. NUEVO FCYT',
            'capacidad' => 80,
            'descripcion' => 'AULA BIBLIOTECA FCYT'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '669B',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 80,
            'descripcion' => 'LABORATORIO 669B (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '613',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 75,
            'descripcion' => 'AULA 613 (LABO QUIMICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690MAT',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 75,
            'descripcion' => 'AUDITORIO MATEMATICAS',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690E',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 75,
            'descripcion' => 'AULA',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690D',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 75,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690B',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 75,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '616',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 75,
            'descripcion' => 'AULA 616 (LABO QUIMICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690A',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 75,
            'descripcion' => 'AULA RESERVADO',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '614',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 75,
            'descripcion' => 'AULA 614 (LABO QUIMICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '615',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 65,
            'descripcion' => 'AULA 615 (LABO QUIMICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '690C',
            'ubicacion' => 'NUEVO EDIF. ACADEMICO 2 (FCYT)',
            'capacidad' => 65,
            'descripcion' => 'AULA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '668',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 60,
            'descripcion' => 'LABORATORIO 668 (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '620',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 60,
            'descripcion' => 'AULA 620 (LABO FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABREF',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 60,
            'descripcion' => 'LABORATORIO REFRIGERACION'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CADCAM',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 60,
            'descripcion' => 'LABORATORIO CADCAM'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '606',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 55,
            'descripcion' => 'AULA 606 (AUDITORIO BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '631',
            'ubicacion' => 'BLOQUE "INGENIERIA INDUSTRIAL"',
            'capacidad' => 55,
            'descripcion' => 'AULA 631',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUDIND',
            'ubicacion' => 'BLOQUE "INGENIERIA INDUSTRIAL"',
            'capacidad' => 55,
            'descripcion' => 'AUDITORIO INDUSTRIAL'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '632',
            'ubicacion' => 'BLOQUE "INGENIERIA INDUSTRIAL"',
            'capacidad' => 55,
            'descripcion' => 'AULA 632',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '652',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 50,
            'descripcion' => 'AULA 652'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '640',
            'ubicacion' => 'BLOQUE "TINGLADOS"',
            'capacidad' => 50,
            'descripcion' => 'AULA 640 (PROYECTOS MECANICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '644',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 50,
            'descripcion' => 'AULA CADCAM',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '644A',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 50,
            'descripcion' => 'AULA 644-A',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '637A',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 50,
            'descripcion' => 'AULA DE ING.MECANICA',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '670',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 50,
            'descripcion' => 'LABORATORIO 670 (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '667B',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 50,
            'descripcion' => 'LABORATORIO 667B (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CEMAR',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 45,
            'descripcion' => 'AULA CEMARR'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684B',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA LABO 4TO PISO (FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684A',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 4TO PISO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '683B',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA 3ER PISO(ALIMENTOS)',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '683A',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 3ER PISO(BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682B',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 2DO PISO(INDUSTRIAL'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682A',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 2DO PISO(ELECTRICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '681B',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 1ER PISO (MECANICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '681A',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN 1ER PISO(MAT NOUSA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '680B',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA PLAN.BAJA(QUIMICA)',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '680A',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 45,
            'descripcion' => 'AULA COMUN PLANTA BAJA (CIVIL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '655',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 40,
            'descripcion' => 'AULA 655',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '671C',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 40,
            'descripcion' => 'LABORATORIO 671C (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '608A',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 40,
            'descripcion' => 'AULA 608A (LABO BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AuPosEl',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 40,
            'descripcion' => 'AUDITORIO POSGRADO ELEKTRO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '608',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 35,
            'descripcion' => 'AULA 608 (LABORATORIO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECGAB',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 30,
            'descripcion' => 'CENTRO DE COMPUTO MECANICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABMAT',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO MATEMATICAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUDMEMI',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 30,
            'descripcion' => 'AUDITORIO MEMI'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUDIT',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 30,
            'descripcion' => 'AUDITORIO MEMI'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L8IN',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO2DO PISO(INDUSTRIAL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L7IN',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO2DO PISO(INDUSTRIAL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L6IN',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO2DO PISO(INDUSTRIAL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L4',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 2DO PISO(ELECTRICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L3',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 2DO PISO(ELECTRICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L2',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 2DO PISO(ELECTRICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L1',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 2DO PISO(ELECTRICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '682L0IN',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO2DO PISO(INDUSTRIAL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '681L9ME',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 1ER PISO (MECANICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '681L7',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'AULA COMUN 1ER PISO (MECANICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684L8',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO 4TO PISO (FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684L7',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO 4TO PISO (FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684L1FI',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO 4TO PISO (FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '684L0',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO 4TO PISO (FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '680L1CI',
            'ubicacion' => 'EDIF. FACULTATIVO LAB. BASICOS',
            'capacidad' => 30,
            'descripcion' => 'LABORATORIO 1 CIVIL'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '616A',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 30,
            'descripcion' => 'AULA 616A (MEZANINE) LABO QMC'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '675',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 30,
            'descripcion' => 'AULA 675',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '674B',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 30,
            'descripcion' => '674B (LABORATORIO CONTROL)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '647',
            'ubicacion' => 'NUEVO PDTF',
            'capacidad' => 30,
            'descripcion' => 'LABORAT.COMP. CIVIL',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '671B',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 30,
            'descripcion' => '671B (GABINETE PROYECTOS)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '674A',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 30,
            'descripcion' => '674A (LAB. TELECOMUNICACIONES)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PDTFDEP',
            'ubicacion' => 'BLOQUE TALLERES CARPINT. PDTF',
            'capacidad' => 25,
            'descripcion' => 'DEPARTAMENTO DIRECCION PDTF'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '621A',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 25,
            'descripcion' => 'AULA 621A (LABO FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '619A',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 25,
            'descripcion' => 'MUSEO DE FISICA',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '619',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 25,
            'descripcion' => 'AULA 619 (LABO FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '671',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 25,
            'descripcion' => 'LABORATORIO 671 (ELEKTRO)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '608B',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 20,
            'descripcion' => 'AULA 608B (LABO BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '609A',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 20,
            'descripcion' => 'AULA 609A (LABO BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISCOM',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 20,
            'descripcion' => 'GABINETE DE COMPUTACION'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AGROQUI',
            'ubicacion' => 'BLOQUE ANTIGUO PROG. AGROQUIM.',
            'capacidad' => 20,
            'descripcion' => 'AGROQUIMICO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOTEC',
            'ubicacion' => 'BLOQUE ANTIGUO PROG. AGROQUIM.',
            'capacidad' => 20,
            'descripcion' => 'LABORATORIO BIOTECNOLOGIA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIODIV',
            'ubicacion' => 'BLOQUE ANTIGUO PROG. AGROQUIM.',
            'capacidad' => 20,
            'descripcion' => 'BIODIVERSIDAD'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '621',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 20,
            'descripcion' => 'AULA 621 (LABO FISICA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIBLIO',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 20,
            'descripcion' => 'BIBLIOTECA BIOLOGIA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PDTF',
            'ubicacion' => 'BLOQUE TALLERES CARPINT. PDTF',
            'capacidad' => 15,
            'descripcion' => 'AULA EN PDTF'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TAMEC',
            'ubicacion' => 'BLOQUE TALLERES CARPINT. PDTF',
            'capacidad' => 15,
            'descripcion' => 'TALLER DE MECANICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '620B',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 15,
            'descripcion' => 'AULA 620B (LABO FISICA)DEPSITO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TAMEC 2',
            'ubicacion' => 'BLOQUE TALLERES CARPINT. PDTF',
            'capacidad' => 15,
            'descripcion' => 'TALLER DE MECANICA 2'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '609',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 12,
            'descripcion' => 'AULA 609 (LABO BIOLOGIA)'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LIMNOL',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 10,
            'descripcion' => 'OFICINAS LIMNOLOGIA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DECDEP',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 7,
            'descripcion' => 'OFICINAS DECANATO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECDEP',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO DE ING. MECANICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIVDEP',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO DE ING. CIVIL'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MATDEP',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO MATEMATICAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISDEP',
            'ubicacion' => 'SECTOR "FISICA"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO FISICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QMCDEP',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO QUIMICA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MATDIR',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 7,
            'descripcion' => 'DIRECCION MATEMATICAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDDEP',
            'ubicacion' => 'BLOQUE "INGENIERIA INDUSTRIAL"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO INDUSTRIAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'POSDEP',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 7,
            'descripcion' => 'DEPARTAMENTO POSTGRADO'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OFMEMI',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 7,
            'descripcion' => 'OFICINA TESISTAS INF-SIST'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABSER',
            'ubicacion' => 'SECTOR "QUIMICA"',
            'capacidad' => 7,
            'descripcion' => 'LABORATORIO DE SERVICIOS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MEMIDIR',
            'ubicacion' => 'EDIFICIO "MEMI"',
            'capacidad' => 5,
            'descripcion' => 'DIRECCION DEL MEMI'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CPD',
            'ubicacion' => 'EDIF. "ADMINISTRACION CENTRAL"',
            'capacidad' => 4,
            'descripcion' => 'CENTRO DE PROC. DE DATOS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INFDEP',
            'ubicacion' => 'SECTOR "INFORMATICA"',
            'capacidad' => 1,
            'descripcion' => 'AULA DE CONSULTA PARA TESISTAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIODEP',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 1,
            'descripcion' => 'DEPARTAMENTO BIOLOGIA'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GABI',
            'ubicacion' => 'SECTOR "BIOLOGIA"',
            'capacidad' => 1,
            'descripcion' => 'AULA CONSULTA GABINETE TESIS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CAE',
            'ubicacion' => 'BLOQUE "INGENIERIA INDUSTRIAL"',
            'capacidad' => 1,
            'descripcion' => 'AULA CONSULTA TESISTAS'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELCDEP',
            'ubicacion' => 'EDIFICIO "ELEKTRO"',
            'capacidad' => 1,
            'descripcion' => 'DEPARTAMENTO ELECTRICIDAD'
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AULVIR',
            'ubicacion' => 'AREA VIRTUAL CERCADO',
            'capacidad' => 0,
            'descripcion' => 'AULA VIRTUAL FCYT',
            'disponible_para_uso' => FALSE
        ]);
        
        DB::table('aulas')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CAMPO',
            'ubicacion' => 'AREA VIRTUAL CERCADO',
            'capacidad' => 0,
            'descripcion' => 'AREA DE TRABAJO DE CAMPO',
            'disponible_para_uso' => FALSE
        ]);
        
        
    }
}
