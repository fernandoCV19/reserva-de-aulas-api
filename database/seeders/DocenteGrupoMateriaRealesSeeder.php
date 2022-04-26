<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocenteGrupoMateriaRealesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RECURSOS NATURALES',
            'codigo' => '2004001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE QUIMICA GENERAL',
            'codigo' => '2004003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA GENERAL',
            'codigo' => '2004045'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA BASICA I',
            'codigo' => '2006018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO I',
            'codigo' => '2008054'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA LINEAL Y TEORIA MATRICIAL',
            'codigo' => '2008237'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'EQUILIBRIOS EN DISOLUCION',
            'codigo' => '2004050'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA INORGANICA',
            'codigo' => '2004174'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE QUIMICA ANALITICA',
            'codigo' => '2004192'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA BASICA II',
            'codigo' => '2006019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO II',
            'codigo' => '2008056'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTADISTICA APLICADA',
            'codigo' => '2008241'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOLOGIA CELULAR',
            'codigo' => '2002048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICOQUIMICA',
            'codigo' => '2004044'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE FISICOQUIMICA',
            'codigo' => '2004147'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA BASICA III',
            'codigo' => '2006020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO III',
            'codigo' => '2008066'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS NUMERICO',
            'codigo' => '2008067'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE QUIMICA ORGANICA',
            'codigo' => '2004012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ORGANICA',
            'codigo' => '2004053'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LOS PROCESOS QUIMICOS',
            'codigo' => '2004055'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA GENERAL',
            'codigo' => '2004062'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECONOMIA Y ADMINISTRACION INDUSTRIAL',
            'codigo' => '2016060'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIBUJO TECNICO',
            'codigo' => '2018057'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ORGANICA II',
            'codigo' => '2004056'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA BIOLOGICA',
            'codigo' => '2004059'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ANALITICA',
            'codigo' => '2004061'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE QUIMICA ORGANICA II',
            'codigo' => '2004145'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE QUIMICA ANALITICA',
            'codigo' => '2004169'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FENOMENOS DE TRANSPORTE GENERAL',
            'codigo' => '2004195'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE ALIMENTOS I',
            'codigo' => '2004089'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS INSTRUMENTAL',
            'codigo' => '2004100'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA DE ALIMENTOS',
            'codigo' => '2004121'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LA INGENIERIA BIOQUIMICA',
            'codigo' => '2004191'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MICROBIOLOGIA DE LOS ALIMENTOS',
            'codigo' => '2004211'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'COSTOS INDUSTRIALES',
            'codigo' => '2016049'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE ALIMENTOS II',
            'codigo' => '2004017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE ANALISIS DE ALIMENTOS',
            'codigo' => '2004019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS',
            'codigo' => '2004020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'NUTRICION',
            'codigo' => '2004203'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIA DE LOS CEREALES',
            'codigo' => '2004204'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIAS LACTEAS',
            'codigo' => '2004206'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE ALIMENTOS III',
            'codigo' => '2004018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTRUMENTACION PROCESOS',
            'codigo' => '2004193'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LA INGENIERIA MEDIO',
            'codigo' => '2004201'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIAS DE GRASAS Y ACEITES',
            'codigo' => '2004207'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIA DE FRUTAS Y HORTALIZAS',
            'codigo' => '2004210'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIA DE BEBIDAS',
            'codigo' => '2004007'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE CALIDAD EN ALIMENTOS',
            'codigo' => '2004021'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE PLANTAS AGRO-ALIMENTARIAS',
            'codigo' => '2004022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O EXPERIMENTAL',
            'codigo' => '2004198'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INDUSTRIAS CARNICAS',
            'codigo' => '2004208'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA DEL FRIO',
            'codigo' => '2004213'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES',
            'codigo' => '1803013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOLOGIA GENERAL',
            'codigo' => '2002004'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA GENERAL',
            'codigo' => '2004163'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA GENERAL',
            'codigo' => '2006063'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA',
            'codigo' => '2008159'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOLOGIA CELULAR Y MOLECULAR',
            'codigo' => '2002005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOFISICA',
            'codigo' => '2002006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICOQUIMICA',
            'codigo' => '2004091'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO',
            'codigo' => '2008160'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HISTOLOGIA ANIMAL COMPARADA',
            'codigo' => '2002007'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MORFOLOGIA Y ANATOMIA VEGETAL',
            'codigo' => '2002008'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ZOOLOGIA DE INVERTEBRADOS',
            'codigo' => '2002009'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ORGANICA',
            'codigo' => '2004092'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOESTADISTICA',
            'codigo' => '2008161'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'EMBRIOLOGIA COMPARADA',
            'codigo' => '2002010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMATICA DE CRIPTOGAMAS',
            'codigo' => '2002011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ARTROPODOLOGIA',
            'codigo' => '2002012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOLOGIA-EDAFOLOGIA',
            'codigo' => '2002013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOQUIMICA',
            'codigo' => '2002014'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANATOMIA COMPARADA',
            'codigo' => '2002015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMATICA DE FANEROGAMAS',
            'codigo' => '2002016'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISIOLOGIA DE INVERTEBRADOS',
            'codigo' => '2002017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOCLIMATOLOGIA-HIDROLOGIA',
            'codigo' => '2002018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GENETICA I',
            'codigo' => '2002019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISIOLOGIA VEGETAL',
            'codigo' => '2002020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ZOOLOGIA DE VERTEBRADOS',
            'codigo' => '2002021'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECOLOGIA I',
            'codigo' => '2002022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GENETICA II',
            'codigo' => '2002023'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BACTERIOLOGIA',
            'codigo' => '2002024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'VIROLOGIA',
            'codigo' => '2002025'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISIOLOGIA DE VERTEBRADOS',
            'codigo' => '2002026'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECOLOGIA II',
            'codigo' => '2002027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥OS EXPERIMENTALES',
            'codigo' => '2002028'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ETNOBOTANICA',
            'codigo' => '2002037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GENETICA DE MICROORGANISMOS',
            'codigo' => '2002062'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MICOLOGIA I',
            'codigo' => '2002030'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOLOGIA DE LA INVESTIGACION',
            'codigo' => '2002031'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'EVOLUCION',
            'codigo' => '2002032'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECOLOGIA DE COMUNIDADES VEGETALES',
            'codigo' => '2002033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MICROBIOLOGIA DE AIRE Y SUELO',
            'codigo' => '2002039'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TAXONOMIA VEGETAL',
            'codigo' => '2002040'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ETOLOGIA',
            'codigo' => '2002044'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECOLOGIA DE POBLACIONES ANIMALES',
            'codigo' => '2002047'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMATICA DE MAMIFEROS',
            'codigo' => '2002054'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INMUNOPARASITOLOGIA',
            'codigo' => '2002066'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BIOGEOGRAFIA',
            'codigo' => '2002035'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MANEJO Y CONSERV. DE RECURS. GENETICOS',
            'codigo' => '2002060'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANIFICACION Y EVALUACION DE PROYECTOS',
            'codigo' => '2016092'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TESIS',
            'codigo' => '2002034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA GENERAL',
            'codigo' => '2004046'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA I',
            'codigo' => '2006004'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA I',
            'codigo' => '2008053'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIBUJO TECNICO',
            'codigo' => '2012001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA II',
            'codigo' => '2006005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMETRIA DESCRIPTIVA',
            'codigo' => '2008013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA II',
            'codigo' => '2008022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOLOGIA GENERAL',
            'codigo' => '2012003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS VECTORIAL Y TENSORIAL',
            'codigo' => '2008014'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROBABILIDAD Y ESTADISTICA',
            'codigo' => '2008029'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOG. Y DEF. DE LOS RECURSOS NATURALES',
            'codigo' => '2012010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTROTECNIA',
            'codigo' => '2014001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'COMPUTACION PARA INGENIERIA',
            'codigo' => '2012002'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS ISOSTATICAS',
            'codigo' => '2012004'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOS GEODESICOS',
            'codigo' => '2012006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECONOMIA POLITICA',
            'codigo' => '2012007'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS NUMERICO',
            'codigo' => '2012060'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HIDRAULICA I',
            'codigo' => '2012008'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HIDROLOGIA',
            'codigo' => '2012012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMATICA',
            'codigo' => '2012068'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA DE LOS MATERIALES DE',
            'codigo' => '2012069'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES I',
            'codigo' => '2018075'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HIDRAULICA II',
            'codigo' => '2012011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES II',
            'codigo' => '2012013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA DE SUELOS I',
            'codigo' => '2012014'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE INGENIERIA',
            'codigo' => '2012020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA ECONOMICA',
            'codigo' => '2012027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRANSPORTES Y COMUNICACIONES',
            'codigo' => '2012015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA SANITARIA I',
            'codigo' => '2012016'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS HIPERESTATICAS',
            'codigo' => '2012017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA DE SUELOS II',
            'codigo' => '2012021'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HORMIGON ARMADO I',
            'codigo' => '2012070'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA AMBIENTAL',
            'codigo' => '2012087'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA SANITARIA II',
            'codigo' => '2012022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINARIA Y EQUIPO DE CONSTRUCCION',
            'codigo' => '2012024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA DE SUELOS APLICADA',
            'codigo' => '2012025'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HORMIGON ARMADO II',
            'codigo' => '2012071'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA DEL MEDIO CONTINUO',
            'codigo' => '2012072'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS DE MADERA Y METALICAS',
            'codigo' => '2012086'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CARRETERAS I',
            'codigo' => '2012026'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OBRAS HIDRAULICAS I',
            'codigo' => '2012029'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CONSTRUCCION DE EDIFICIOS',
            'codigo' => '2012031'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIRECCION DE OBRAS Y VALUACIONES',
            'codigo' => '2012032'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FUNDACIONES I',
            'codigo' => '2012033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE MODALIDADES DE GRADUACION I',
            'codigo' => '2012073'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEMENTOS FINITOS',
            'codigo' => '2012074'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PUENTES',
            'codigo' => '2012035'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HORMIGON PREESFORZADO',
            'codigo' => '2012036'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA ANTISISMICA',
            'codigo' => '2012037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS ESPECIALES',
            'codigo' => '2012038'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FUNDACIONES II',
            'codigo' => '2012039'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CARRETERAS II',
            'codigo' => '2012042'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AEROPUERTOS',
            'codigo' => '2012043'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE TRAFICO',
            'codigo' => '2012044'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'VIAS FERREAS',
            'codigo' => '2012045'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MODELOS HIDRAULICOS',
            'codigo' => '2012047'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PUERTOS Y VIAS NAVEGABLES',
            'codigo' => '2012050'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HIDRAULICA DE RIOS',
            'codigo' => '2012051'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OBRAS HIDRAULICAS II',
            'codigo' => '2012055'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANTAS DE PURIFICACION DE AGUA POTABLE',
            'codigo' => '2012076'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE INGENIERIA SANITARIA',
            'codigo' => '2012077'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES DOM. CONST. DE OBRAS',
            'codigo' => '2012078'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES',
            'codigo' => '2012079'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEMAS ESPECIALES EN INGENIERIA GEOTECNIA',
            'codigo' => '2012080'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOS CONSTRUCTIVOS EN GEOTECNIA',
            'codigo' => '2012081'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEMAS ESPECIALES EN HIDRAULICA',
            'codigo' => '2012088'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMETRIA ANALITICA',
            'codigo' => '2008010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA LINEAL Y MATRICIAL',
            'codigo' => '2008240'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECUACIONES DIFERENCIALES',
            'codigo' => '2008058'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA COMPUTACIONAL I',
            'codigo' => '2006089'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO COMPLEJO',
            'codigo' => '2008156'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIDACTICA GENERAL',
            'codigo' => '1801033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA BASICA IV',
            'codigo' => '2006031'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA',
            'codigo' => '2006037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRABAJO DE GRADO',
            'codigo' => '2006003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA II',
            'codigo' => '2006027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMETRIA',
            'codigo' => '2008070'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA LINEAL',
            'codigo' => '2008055'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS DISCRETAS',
            'codigo' => '2008075'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'COMPUTACION I',
            'codigo' => '2010008'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROBABILIDAD Y ESTADISTICA I',
            'codigo' => '2008077'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS I',
            'codigo' => '2008080'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MATEMATICA COMPUTACIONAL II',
            'codigo' => '2008214'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROBABILIDAD Y ESTADISTICA II',
            'codigo' => '2008081'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA I',
            'codigo' => '2008019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LA PROGRAMACION',
            'codigo' => '2010001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO NUMERICO',
            'codigo' => '2008052'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIRCUITOS ELECTRICOS I',
            'codigo' => '2014002'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'VARIABLE COMPLEJA',
            'codigo' => '2008024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTROMAGNETISMO',
            'codigo' => '2014003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIRCUITOS ELECTRICOS II',
            'codigo' => '2014004'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRANSFORMADAS INTEGRALES',
            'codigo' => '2008157'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIRCUITOS ELECTRICOS III',
            'codigo' => '2014005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA ANALOGICA I',
            'codigo' => '2014006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES',
            'codigo' => '2018003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'HIDRAULICA APLICADA',
            'codigo' => '2018004'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA ANALOGICA II',
            'codigo' => '2014007'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS DC',
            'codigo' => '2014008'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRANSFORMADORES',
            'codigo' => '2014009'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MEDIDAS ELECTRICAS',
            'codigo' => '2014010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS TERMICAS',
            'codigo' => '2018005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES ELECTRICAS I',
            'codigo' => '2014011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS ASINCRONAS',
            'codigo' => '2014012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS SINCRONAS',
            'codigo' => '2014013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA DIGITAL I',
            'codigo' => '2014014'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS',
            'codigo' => '2016005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA DE POTENCIA',
            'codigo' => '2014015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CENTRALES HIDRAULICAS',
            'codigo' => '2014016'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'REDES DE DISTRIBUCION',
            'codigo' => '2014017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES ELECTRICAS II',
            'codigo' => '2014018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CENTRALES TERMICAS',
            'codigo' => '2014019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE CONTROL',
            'codigo' => '2014020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE POTENCIA I',
            'codigo' => '2014021'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LINEAS ELECTRICAS I',
            'codigo' => '2014022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SUBESTACIONES',
            'codigo' => '2014023'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MANTENIMIENTO ELECTRICO',
            'codigo' => '2014024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TELECOMUNICACIONES',
            'codigo' => '2014025'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE POTENCIA II',
            'codigo' => '2014026'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MERCADEO Y TARIFACION',
            'codigo' => '2014027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNICAS DE ALTA TENSION',
            'codigo' => '2014028'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LINEAS ELECTRICAS II',
            'codigo' => '2014029'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROYECTO TERMINAL I',
            'codigo' => '2014030'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TOPICOS ELECTRICOS I (TELEFONIA BASICA)',
            'codigo' => '2014041'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES ELECTRICAS INDUSTRIALES I',
            'codigo' => '2014045'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CONTROL Y AUTOMATIZACION INDUSTRIAL',
            'codigo' => '2014088'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEM. DE MAQUINAS Y TECNOL. MECANICA',
            'codigo' => '2018011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE POTENCIA III',
            'codigo' => '2014031'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROTECCION DE SISTEMAS ELECTRICOS',
            'codigo' => '2014032'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SIMULACION DE SISTEMAS DE POTENCIA',
            'codigo' => '2014033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROYECTO TERMINAL II',
            'codigo' => '2014034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES ELECTRICAS INDUSTRIALES II',
            'codigo' => '2014048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ACCIONAMIENTO Y SIMULACION ELECTROTECNICA',
            'codigo' => '2014051'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ADMINISTRACION DE PROYECTOS',
            'codigo' => '2016006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIBUJO TECNICO COMPUTARIZADO',
            'codigo' => '2018015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTADISTICA',
            'codigo' => '2008048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIENCIA DE LOS MATERIALES',
            'codigo' => '2018023'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA',
            'codigo' => '2018009'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTATICA',
            'codigo' => '2018017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES',
            'codigo' => '2018002'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DINAMICA',
            'codigo' => '2018018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA MECANICA I',
            'codigo' => '2018008'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRANSFERENCIA DE CALOR',
            'codigo' => '2018033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA DE FLUIDOS',
            'codigo' => '2018135'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ORGANIZACION INDUSTRIAL',
            'codigo' => '2016091'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEMENTOS DE MAQUINAS I',
            'codigo' => '2018032'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA MECANICA II',
            'codigo' => '2018034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE CONTROL DINAMICO',
            'codigo' => '2014063'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GESTION DE CALIDAD',
            'codigo' => '2016022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS HIDRAULICAS',
            'codigo' => '2018040'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE CONTROL Y AUTOMATISMO',
            'codigo' => '2014143'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS HIDRAULICOS Y NEUMATICOS',
            'codigo' => '2018043'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS DE ELEVACION Y TRANSPORTE',
            'codigo' => '2018048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GESTION Y CALIDAD AMBIENTAL',
            'codigo' => '2018061'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PRACTICA PROFESIONALIZANTE',
            'codigo' => '2018047'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREPARACION DE PROYECTO DE GRADO',
            'codigo' => '2018049'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'REFRIGERACION Y AIRE ACONDICIONADO',
            'codigo' => '2018050'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MANTENIMIENTO INDUSTRIAL',
            'codigo' => '2018054'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECATRONICA',
            'codigo' => '2018136'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA ECONOMICA',
            'codigo' => '2016023'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RECURSOS HUMANOS - PRODUCTIVIDAD',
            'codigo' => '2016030'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ROBOTICA INDUSTRIAL',
            'codigo' => '2018001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROYECTO DE GRADO',
            'codigo' => '2018055'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LA PROGRAMACION',
            'codigo' => '2010010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEM. DE PROGRAMACION Y ESTRUC. DE DATOS',
            'codigo' => '2010003'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOS TECNICAS Y TALLER DE PROGRAMACION',
            'codigo' => '2010012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS DE SE¥ALES',
            'codigo' => '2014059'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MEDIDAS ELECTRONICAS',
            'codigo' => '2014061'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTROTECNIA INDUSTRIAL',
            'codigo' => '2014087'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA MODERNA',
            'codigo' => '2006012'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE PROGRAMACION EN BAJO NIVEL',
            'codigo' => '2010005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TELECOMUNICACIONES I',
            'codigo' => '2014064'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LINEAS DE TRANSMISION Y PROPAGACION',
            'codigo' => '2014065'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA DIGITAL II',
            'codigo' => '2014037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TELECOMUNICACIONES II',
            'codigo' => '2014066'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MICROPROCESADORES I',
            'codigo' => '2014035'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ROBOTICA',
            'codigo' => '2014071'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE ELECTRONICA ANALOGICA',
            'codigo' => '2014075'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TELECOMUNICACIONES III',
            'codigo' => '2014139'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MULTIMEDIA',
            'codigo' => '2014140'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE SISTEMAS DIGITALES I',
            'codigo' => '2014141'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE SISTEMAS OPERATIVOS',
            'codigo' => '2010017'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MICROPROCESADORES II',
            'codigo' => '2014042'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE SISTEMAS DIGITALES II',
            'codigo' => '2014142'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'REDES DE COMPUTADORAS',
            'codigo' => '2010047'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TOPICOS ELECTRONICOS  (TELEFONIA BASICA)',
            'codigo' => '2014046'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TOPICOS ELECTRONICOS  (AVIONICA)',
            'codigo' => '2014049'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'COMUNICACION DE DATOS',
            'codigo' => '2014144'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES I',
            'codigo' => '1803010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES II',
            'codigo' => '1803011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES III',
            'codigo' => '1803009'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTRONICA',
            'codigo' => '2006034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA COMPUTACIONAL II',
            'codigo' => '2006090'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTRODUCCION A LA FISICA NUCLEAR Y DE',
            'codigo' => '2006042'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICA TEORICA III',
            'codigo' => '2006039'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER AVANZADO I',
            'codigo' => '2006041'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ENERGIAS ALTERNATIVAS',
            'codigo' => '2006059'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANICA ESTADISTICA',
            'codigo' => '2006046'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPTICA',
            'codigo' => '2006048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE GRADO',
            'codigo' => '2006049'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ASTRONOMIA',
            'codigo' => '2006062'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELECTIVA III (FISICA DE MATERIALES)',
            'codigo' => '2006100'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTADISTICA I',
            'codigo' => '2008059'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIBUJO TECNICO COMPUTARIZADO',
            'codigo' => '2018007'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO COMPUTARIZADO',
            'codigo' => '2008043'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTADISTICA II',
            'codigo' => '2008061'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ORGANIZACION INDUSTRIAL',
            'codigo' => '2016010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ECONOMIA INDUSTRIAL',
            'codigo' => '2016011'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES',
            'codigo' => '2018006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES INDUSTRIALES I',
            'codigo' => '2016015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CONTABILIDAD BASICA',
            'codigo' => '2016046'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INVESTIGACION OPERATIVA I',
            'codigo' => '2016048'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MERCADOTECNIA',
            'codigo' => '2016057'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIENCIA DE LOS MATERIALES',
            'codigo' => '2018010'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEM. DE MAQUINAS Y TECNOL. MECANICA I',
            'codigo' => '2018066'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES INDUSTRIALES II',
            'codigo' => '2016019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INVESTIGACION DE MERCADOS',
            'codigo' => '2016020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INVESTIGACION OPERATIVA II',
            'codigo' => '2016051'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE METODOS Y REINGENIERIA',
            'codigo' => '2016052'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA MECANICA II',
            'codigo' => '2018013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANIF. Y CONTROL DE LA PRODUCCION I',
            'codigo' => '2016021'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE SEGURIDAD',
            'codigo' => '2016024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES INDUSTRIALES III',
            'codigo' => '2016025'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O ASISTIDO POR COMPUTADORA',
            'codigo' => '2016026'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANIF. Y CONTROL DE LA PRODUCCION II',
            'codigo' => '2016027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE SISTEMAS I',
            'codigo' => '2016028'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREP. Y EVAL. DE PROYECTOS I',
            'codigo' => '2016029'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROCESOS INDUSTRIALES I',
            'codigo' => '2016031'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE SISTEMAS II',
            'codigo' => '2016032'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREP. Y EVAL. DE PROYECTOS II',
            'codigo' => '2016033'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE TESIS I',
            'codigo' => '2016034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROCESOS INDUSTRIALES II',
            'codigo' => '2016036'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DERECHO EMPRESARIAL',
            'codigo' => '2016038'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER TESIS II',
            'codigo' => '2016039'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRABAJO DIRIGIDO (OPCIONAL)',
            'codigo' => '2016040'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PSICOLOGIA INDUSTRIAL',
            'codigo' => '2016041'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GESTION ESTRATEGICA DE EMPRESAS',
            'codigo' => '2016059'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PRACTICA EMPRESARIAL',
            'codigo' => '2016090'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES I',
            'codigo' => '1803001'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES II',
            'codigo' => '1803002'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ARQUITECTURA DE COMPUTADORAS I',
            'codigo' => '2010013'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROGRAMACION',
            'codigo' => '2010200'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CALCULO NUMERICO',
            'codigo' => '2008060'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LOGICA',
            'codigo' => '2008140'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ARQUITECTURA DE COMPUTADORAS II',
            'codigo' => '2010014'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEORIA DE GRAFOS',
            'codigo' => '2010037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ORGANIZACION Y METODOS',
            'codigo' => '2010041'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOS Y TECNICAS DE PROGRAMACION',
            'codigo' => '2010206'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BASE DE DATOS I',
            'codigo' => '2010015'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE INFORMACION I',
            'codigo' => '2010018'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROGRAMACION FUNCIONAL',
            'codigo' => '2010038'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGORITMOS AVANZADOS',
            'codigo' => '2010197'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BASE DE DATOS II',
            'codigo' => '2010016'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DE INFORMACION II',
            'codigo' => '2010022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEORIA DE AUTOMATAS Y LENG. FORMALES',
            'codigo' => '2010040'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GRAFICACION POR COMPUTADORA',
            'codigo' => '2010042'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTELIGENCIA ARTIFICIAL I',
            'codigo' => '2010201'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA DE SOFTWARE',
            'codigo' => '2010020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURA Y SEMANTICA DE LENGUAJES DE',
            'codigo' => '2010049'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE BASE DE DATOS',
            'codigo' => '2010053'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTELIGENCIA ARTIFICIAL II',
            'codigo' => '2010202'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROGRAMACION WEB',
            'codigo' => '2010203'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SIMULACION DE SISTEMAS',
            'codigo' => '2010019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE INGENIERIA DE SOFTWARE',
            'codigo' => '2010024'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ARQUITECTURA DE SOFTWARE',
            'codigo' => '2010100'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTERACCION HUMANO COMPUTADOR',
            'codigo' => '2010204'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA REDES AVANZADAS',
            'codigo' => '2010205'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'APLICACION DE SISTEMAS OPERATIVOS',
            'codigo' => '2010035'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'EVALUACION Y AUDITORIA DE SISTEMAS',
            'codigo' => '2010102'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE GRADO I',
            'codigo' => '2010214'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROCESOS AGILES',
            'codigo' => '2010066'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ENTORNOS VIRTUALES DE APRENDIZAJE',
            'codigo' => '2010178'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SERVICIOS TELEMATICOS',
            'codigo' => '2010188'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RECONOCIMIENTO DE VOZ',
            'codigo' => '2010189'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SEGURIDAD DE SISTEMAS',
            'codigo' => '2010209'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE GRADO II',
            'codigo' => '2010215'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CLOUD COMPUTING',
            'codigo' => '2010216'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'BUSINESS INTELLIGENCE Y BIG DATA',
            'codigo' => '2010217'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIENCIA DE DATOS Y MACHINE LEARNING',
            'codigo' => '2010218'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES I',
            'codigo' => '1803005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES II',
            'codigo' => '1803006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEORIA AXIOMATICA DE CONJUNTOS',
            'codigo' => '2008078'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMETRIA I',
            'codigo' => '2008079'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ALGEBRA ABSTRACTA I',
            'codigo' => '2008085'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GEOMETRIA III',
            'codigo' => '2008086'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS III',
            'codigo' => '2008087'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS NUMERICO I',
            'codigo' => '2008122'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS FUNCIONAL',
            'codigo' => '2008092'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS DINAMICOS',
            'codigo' => '2008093'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INVESTIGACION OPERATIVA',
            'codigo' => '2008236'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FUNCIONES ESPECIALES',
            'codigo' => '2008242'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TENSORES Y FORMAS',
            'codigo' => '2008098'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TRANSFORMADAS DE FOURIER',
            'codigo' => '2008034'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SEMINARIO DE GRADO',
            'codigo' => '2008100'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS NUMERICO III',
            'codigo' => '2008258'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPTICA Y ESPECTROSCOPIA MOLECULAR',
            'codigo' => '2006023'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICOQUIMICA II',
            'codigo' => '2004109'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ORGANICA III',
            'codigo' => '2004105'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FISICOQUIMICA III',
            'codigo' => '2004114'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA INORGANICA III',
            'codigo' => '2004175'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ANALITICA II',
            'codigo' => '2004176'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ANALITICA III',
            'codigo' => '2004115'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SINTESIS ORGANICA',
            'codigo' => '2004119'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PLANIFICACION ORGANIZACION Y CONTROL DE',
            'codigo' => '2004130'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA DEL MEDIO AMBIENTE',
            'codigo' => '2004173'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SEPARACIONES QUIMICAS',
            'codigo' => '2004116'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'QUIMICA ANALITICA IV',
            'codigo' => '2004120'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGLES TECNICO',
            'codigo' => '1803238'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DIBUJO MECANICO',
            'codigo' => '2018016'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA I',
            'codigo' => '2018019'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA II',
            'codigo' => '2018020'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MECANISMOS',
            'codigo' => '2018022'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIENCIA DE LOS MATERIALES II',
            'codigo' => '2018026'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEORIA Y ENSAYO DE MATERIALES',
            'codigo' => '2018027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'RESISTENCIA DE MATERIALES II',
            'codigo' => '2018028'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS TERMICAS I',
            'codigo' => '2018041'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PRACTICA EN LA INDUSTRIA',
            'codigo' => '2018037'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'VIBRACIONES',
            'codigo' => '2018038'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ELEMENTOS DE MAQUINAS II',
            'codigo' => '2018039'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS TERMICAS II',
            'codigo' => '2018044'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INSTALACIONES ELECTROMECANICAS',
            'codigo' => '2018056'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ESTRUCTURAS DE ACERO',
            'codigo' => '2018042'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE MAQUINAS I',
            'codigo' => '2018045'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MAQUINAS NEUMATICAS',
            'codigo' => '2018076'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA AUTOMOTRIZ',
            'codigo' => '2018079'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INGENIERIA ASISTIDA POR COMPUTADORA',
            'codigo' => '2018046'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TEORIA DE LA LUBRICACION',
            'codigo' => '2018077'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'AUTOMATIZACION Y CONTROL',
            'codigo' => '2018053'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA I',
            'codigo' => '2004183'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FENOMENOS DE TRANSPORTE A',
            'codigo' => '2004184'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TERMODINAMICA II',
            'codigo' => '2004196'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE TERMODINAMICA',
            'codigo' => '2004069'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES UNITARIAS I',
            'codigo' => '2004072'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FENOMENOS DE TRANSPORTE B',
            'codigo' => '2004197'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS I',
            'codigo' => '2004005'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES UNITARIAS II',
            'codigo' => '2004078'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TECNOLOGIA QUIMICA',
            'codigo' => '2004200'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS II',
            'codigo' => '2004006'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE REACTORES I',
            'codigo' => '2004181'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE OPERACIONES UNITARIAS I',
            'codigo' => '2004187'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'OPERACIONES UNITARIAS III',
            'codigo' => '2004199'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ANALISIS Y DISE¥O DE PROCESOS QUIMICOS',
            'codigo' => '2004079'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DINAMICA Y CONTROL DE PROCESOS',
            'codigo' => '2004083'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE REACTORES II',
            'codigo' => '2004180'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DISE¥O DE PLANTAS QUIMICAS',
            'codigo' => '2004182'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE REACTORES',
            'codigo' => '2004186'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'LABORATORIO DE OPERACIONES UNITARIAS II',
            'codigo' => '2004188'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PROYECTO FINAL',
            'codigo' => '2010122'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOLOGIA  INVESTIGACION Y TEC',
            'codigo' => '2010140'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'MATEMATICA DISCRETA',
            'codigo' => '2008057'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'CIRCUITOS ELECTRONICOS',
            'codigo' => '2010141'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS I',
            'codigo' => '2010142'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INTELIGENCIA ARTIFICIAL',
            'codigo' => '2010027'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS II',
            'codigo' => '2010143'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'SISTEMAS ECONOMICOS',
            'codigo' => '2010144'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'REDES DE NUEVA GENERACION',
            'codigo' => '2010177'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'GESTION DE CALIDAD DE SOFTWARE',
            'codigo' => '2010145'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'REDES AVANZADAS DE COMPUTADORAS',
            'codigo' => '2010146'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DINAMICA DE SISTEMAS',
            'codigo' => '2010186'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'TALLER DE SIMULACION DE SISTEMAS',
            'codigo' => '2010116'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'METODOL. Y PLANIF. DE PROYECTO DE GRADO',
            'codigo' => '2010119'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'INFORMATICA FORENSE',
            'codigo' => '2010210'
        ]);
        
        DB::table('materias')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PRACTICA EMPRESARIAL',
            'codigo' => '2010147'
        ]);
        
        
    }
}
