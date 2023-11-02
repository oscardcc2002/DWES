<?php
/** 
 * @author Oscar del Campo
 */


echo '<!DOCTYPE html>
<html>
<head>
    <title>Horario de Clases</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    
        th {
            background-color: #3498db; /* Azul */
            color: white; /* Texto blanco */
        }
    
    
        td:first-child {
            background-color: #2ecc71; /* Verde */
            color: white; /* Texto blanco */
        }
      
    </style>
    
</head>
<body>
    <h1>Horario de Clases</h1>
    <h2>Oscar del Campo Carpio<h2>
    <table>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <td>14:10 - 15:05</td>
            <td rowspan="2">Deserrollo WEB en entorno cliente</td>
            <td rowspan="2">Despliegue de aplicaciones</td>
            <td></td>
            <td rowspan="2">Deserrollo WEB en entorno cliente</td>
            <td rowspan="2">Deserrollo WEB en entorno servidor</td>
        </tr>
        <tr>
            <td>15:05 - 16:00</td>
            <td rowspan="2">Deserrollo WEB en entorno servidor</td>
        </tr>
        <tr>
            <td>16:00 - 16:55</td>
            <td>Empresa e iniciativa emprendedora</td>
            <td>Empresa e iniciativa emprendedora</td>
            <td>Deserrollo WEB en entorno servidor</td>
            <td>Empresa e iniciativa emprendedora</td>
        </tr>
        <tr>
            <td>16:55 - 16:55</td>
            <td colspan="5">Recreo</td>
          
        </tr>
        <tr>
            <td>17:15 - 18:10</td>
            <td rowspan="2">Deserrollo WEB en entorno servidor</td>
            <td>Tutoria</td>
            <td rowspan="2">Diseño de interfaces WEB</td>
            <td>Deserrollo WEB en entorno servidor</td>
            <td rowspan="2">Diseño de interfaces WEB</td>
        </tr>
        <tr>
            <td>18:10 - 19:05</td>
            <td rowspan="3">Deserrollo WEB en entorno cliente</td>
            <td rowspan="2">Despliegue de aplicaciones WEB</td>
        </tr>
        <tr>
            <td>19:05 - 20:00</td>
            <td rowspan="2">Diseño de interfaces WEB</td>
            <td rowspan="2">Despliegue de aplicaciones WEB</td>
            <td></td>
        </tr>
        <tr>
            <td>20:00 - 20:55</td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>

'


?>