<h1>Полезные ссылки</h1>
<p>
            <table>
            В данной таблице представлены всевозможны полезные ссылки.
            <tr><td>Понятие</td><td>Ссылки</td></tr>
            <?php

                foreach($data as $row)
                {
                    echo '<tr><td>'.$row['Concept'].'</td><td>'.$row['Ref'].'</td></tr>';
                }

            ?>
            </table>
</p>

