<?php
    namespace App\Utility;

    class PythagoreUtility{
        public function display():string{
            $html = "<table border='1'>
            <thead>
                <tr>";
            for ($i = 0; $i < 11; $i++) { 
                $html .= "<th></th>"; // Utiliser ".=" pour concaténer les chaînes
            }

            $html .= "</tr>
                    </thead>
                    <tbody>";

            for ($i = 0; $i < 11; $i++) {
                $color = ($i % 2 == 0) ? '#f1f1f1' : '#ffffff'; // Alterner les couleurs des lignes
                
                $html .= "<tr style='background-color: $color'>
                            <td>$i</td>";
                
                for ($j = 1; $j < 11; $j++) {  
                    // Calcul des valeurs de la table de multiplication ou des cases spéciales
                    $html .= "<td>" . (($i == 0) ? $j : (($i == $j) ? 'X' : $j * $i)) . "</td>";
                }
                
                $html .= "</tr>";
            }

            $html .= "</tbody>
                    </table>";

            return $html; // Retourner le HTML final sous forme de string

        }
    }
?>