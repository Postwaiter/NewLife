<h1>Полезные ссылки</h1>
<p>
            <table>
            Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
            <tr><td>Понятие</td><td>Ссылки</td></tr>
            <?php

                foreach($data as $row)
                {
                    echo '<tr><td>'.$row['Concept'].'</td><td>'.$row['Ref'].'</td></tr>';
                }

            ?>
            </table>
</p>

