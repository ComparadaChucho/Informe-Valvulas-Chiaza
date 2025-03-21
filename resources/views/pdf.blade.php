<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Calibración</title>
    <style>
        /* Estilos generales para el documento */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin-top: 0px;
            margin-left:0px;
        }

        .right{
            padding: 10px;
            text-align: right;
        }

        .bottom{
            margin-bottom: 20px;
        }

        .top{
            margin-top: 20px;
        }

        /* Estilos para la tabla principal */
        table {
            width: 90%; /* Ajustá el ancho según lo que necesites */
            border-collapse: collapse;
            border: 2px solid black;
            table-layout: fixed; /* Mantiene el tamaño de las columnas */
            margin: 0 auto; /* Centra la tabla horizontalmente */
        }

        .xborder {
            border: 0px;
        }

        .textarea{
            border: 1px solid black;
            text-align: center;
        }

        .textarea2{
            border: 2px solid black;
            text-align: center;
        }

        .textarea3{
            border: 0px;
            text-align: left;
            padding: 20px;
            font-weight: bold;
            font-size: 14px;
        }

        .image{
            padding: 20px;
            margin-top: 16px;
        }

        /* Estilos para las celdas de la tabla */
        th, td {
            border: 2px solid black;
            padding: 3px;
            text-align: left;
            word-wrap: break-word; /* Evita que el texto se desborde */
        }

        /* Estilos para las columnas iguales */
        colgroup col {
            width: 25%; /* 4 columnas del mismo tamaño */
        }
        /* Estilo para los títulos de sección */
        .title {
            background-color: #bfbabd;
            font-weight: bold;
            text-align: center;
        }

        .subtitle{
            background-color: #dddadc;
            text-align: left;
        }

        /* Estilo para los encabezados */
        .header {
            text-align: center;
            font-weight: bold;
        }

        .heading {
            text-align: left;
            font-weight: bold;
        }
        /* Estilo para las firmas al final */
        .signature {
            text-align: center;
            border-top: 1px solid black;
            padding-top: 5px;
        }
        /* Estilos para el footer */
        .footer {
            position: absolute;
            bottom: 20px;
            left: 0;
            font-size: 10px;
            width: 100%;
            white-space: pre-line; /* Mantiene el formato de los saltos de línea */
        }

        .footy{
            margin-right: 33px;
            margin-top: 0px;
            margin-bottom: 10px;
            text-align: right;
            white-space: pre-line; /* Mantiene el formato de los saltos de línea */
        }

        .page-break {
            page-break-before: always; /* O usa page-break-after: always; según necesites */
        }
    </style>
</head>
<body>
    <table>
        <table class="xborder">
            <tr>
                <td class="heading xborder">Sistema Integrado de Gestión (SIG) FORMULARIO FO-52/00</td>
                <!-- Imagen del logo -->
                <td class="right bottom xborder">
                    <img src="{{ public_path('images/Isologo_Chiaza_hor.jpg') }}" width="200" alt="Logo">
                </td>
            </tr>
        </table>

        <table>
            <!-- Forzar que las 4 columnas sean iguales -->
            <colgroup>
                <col>
                <col>
                <col>
                <col>
            </colgroup>

            <!-- Sección: Número de Acta -->
            <tr>
                <td colspan="3" class="title">ACTA DE CALIBRACIÓN DE VÁLVULAS DE SEGURIDAD Nº:</td>
                <td class="title">{{ $datos['numero_acta'] }}</td>
            </tr>

            <!-- Información de la empresa -->
            <tr>
                <td class="subtitle">Empresa</td>
                <td class="textarea" colspan="3">{{ $empresa['name'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Ubicación</td>
                <td class="textarea" colspan="3">-</td>
            </tr>
            <tr>
                <td class="subtitle">TAG</td>
                <td class="textarea" colspan="3">{{ $datos['tag'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Fecha</td>
                <td class="textarea" colspan="3">{{ $datos['fecha'] }}</td>
            </tr>

            <!-- Características de la válvula -->
            <tr><td colspan="4" class="title">CARACTERÍSTICAS DE LA VÁLVULA</td></tr>
            <tr>
                <td class="subtitle">Marca</td>
                <td class="textarea" colspan="3">{{ $valvula['marca'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Modelo</td>
                <td class="textarea" colspan="3">{{ $valvula['modelo'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Nº de Serie</td>
                <td class="textarea" colspan="3">{{ $valvula['n_de_serie'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Diámetro</td>
                <td class="textarea" colspan="3">{{ $valvula['diametro'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Tipo</td>
                
                @if ($valvula['tipo_valvula'] == 'resorte')
                    <td class="textarea" colspan="3">
                        Resorte 
                    </td>
                @else
                    <td class="textarea" colspan="3">
                        Piloto
                    </td>
                @endif

            </tr>

            <!-- Sección combinada: Unidades y Tareas Efectuadas con espacio igual en columnas -->
            <tr>
                <td colspan="2" class="title">UNIDADES</td>
                <td colspan="2" class="title">TAREAS EFECTUADAS</td>
            </tr>
            <tr>
                <td class="subtitle">Presión</td>
                <td class="textarea">{{ $datos['presion'] }}</td>

                <td class="subtitle">Calibrada</td>
                <td class="textarea">
                    @if (isset($datos['tareas_efectuadas']) && in_array('Calibrada', $datos['tareas_efectuadas']))
                        X
                    @endif                
                </td>
            </tr>
            <tr>
                <td class="subtitle">Diámetro</td>
                <td class="textarea">{{ $datos['diametro'] }}</td>

                <td class="subtitle">Reparada</td>
                <td class="textarea">
                    @if (isset($datos['tareas_efectuadas']) && in_array('Reparada', $datos['tareas_efectuadas']))
                        X
                    @endif 
                </td>
            </tr>
            <tr>
                <td class="subtitle">Otras</td>
                <td class="textarea">{{ $datos['otras'] }}</td>

                <td class="subtitle">Reemplazada</td>
                <td class="textarea">
                    @if (isset($datos['tareas_efectuadas']) && in_array('Remplazada', $datos['tareas_efectuadas']))
                        X
                    @else
                        -
                    @endif 
                </td>
            </tr>

            <!-- Características de la calibración -->
            <tr><td colspan="4" class="title">CARACTERÍSTICAS DE LA CALIBRACIÓN</td></tr>
            <tr>
                <td class="subtitle header">Presiones</td>
                <td class="subtitle header">Presión de Timbre</td>
                <td class="subtitle header">Presión de Venteo</td>
                <td class="subtitle header">Presión de Cierre</td>
            </tr>
            <tr>
                <td class="subtitle" rowspan="1">Valor Nominal</td>
                <td class="textarea">{{ $datos['presion-timbre'] }}</td>
                <td class="textarea">{{ $datos['presion-venteo'] }}</td>
                <td class="textarea">{{ $datos['presion-cierre'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Valor Hallado</td>
                <td class="textarea">{{ $datos['presion-timbre-1'] }}</td>
                <td class="textarea">{{ $datos['presion-venteo-1'] }}</td>
                <td class="textarea">{{ $datos['presion-cierre-1'] }}</td>
            </tr>
            <tr>
                <td class="subtitle">Valor Calibrado</td>
                <td class="textarea">{{ $datos['presion-timbre-2'] }}</td>
                <td class="textarea">{{ $datos['presion-venteo-2'] }}</td>
                <td class="textarea">{{ $datos['presion-cierre-2'] }}</td>
            </tr>

            <!-- Instrumentos Patrones -->
            <tr><td colspan="4" class="title">INSTRUMENTOS PATRONES</td></tr>
            <tr>
                <td class="subtitle">Descripción</td>
                <td class="subtitle">Marca</td>
                <td class="subtitle">Modelo</td>
                <td class="subtitle">Otros</td>
            </tr>
            <tr>
                <td class="textarea">{{ $datos['descripcion'] }}</td>
                <td class="textarea">{{ $datos['marca'] }}</td>
                <td class="textarea">{{ $datos['modelo'] }}</td>
                <td class="textarea">{{ $datos['otros'] }}</td>
            </tr>
            <tr>
                <td class="textarea">{{ $datos['descripcion-1'] }}</td>
                <td class="textarea">{{ $datos['marca-1'] }}</td>
                <td class="textarea">{{ $datos['modelo-1'] }}</td>
                <td class="textarea">{{ $datos['otros-1'] }}</td>
            </tr>
            <tr>
                <td class="textarea">{{ $datos['descripcion-2'] }}</td>
                <td class="textarea">{{ $datos['marca-2'] }}</td>
                <td class="textarea">{{ $datos['modelo-2'] }}</td>
                <td class="textarea">{{ $datos['otros-2'] }}</td>
            </tr>

            <!-- Observaciones -->
            <tr>
                <td class="title" ><p>OBSERVACIONES</p></td>
                <td class="textarea2" colspan="3">{{ $datos['observaciones'] }}</td>
            </tr>
        </table>
        
        <table class="top">
            <!-- Firmas al final con columnas iguales -->
            <tr>
                <td class="signature title" colspan="2">Elaborado por</td>
                <td class="signature title" colspan="2">Aprobado por</td>
            </tr>
            <tr>
                <td class="textarea2" colspan="2">{{ $datos['elaborado_por'] }}</td>
                <td class="textarea2" colspan="2">{{ $datos['aprobado_por'] }}</td>
            </tr>
        </table>
        <div class="footy">
            Ramón Saavedra 298 2200
            San Lorenzo | Santa Fe | Argentina
            (+54 3476) 432595 | 432589
            info@chiaza.com.ar
            chiaza.com.ar
        </div>
    </table>

    <footer class="footer">
        Nombre: FERRERO DANIEL EDUARDO  
        Título: INGENIERO MECÁNICO, Nro. ICIE: 2-4124-5  
        Expediente: 62476, Fecha: 25/10/2024 08:14 hs.  
        Categoría: RDP 60/3 - Calderas y Aparatos Sometidos a Presión, Tarea: Calibración de válvulas de seguridad e Instrumentos de Control  
        Comitente: BASF ARGENTINA S.A, CUIT: 30517486678  
        Código: 6327188138277522432, UUID: 4830a3a6-92c2-11ef-b71e-fa16c0015899  
    </footer>
</body>
</html>
