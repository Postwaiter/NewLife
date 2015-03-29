<h1>Умения и навыки</h1>
<p>
            <table>
            Все данной таблице представлены программные продукты с описанием опыта работы с ними.
            <tr><td>Продукт</td><td>Описание</td></tr>
            <?php

                foreach($data as $row)
                {
                    echo '<tr><td>'.$row['Soft'].'</td><td>'.$row['Description'].'</td></tr>';
                }

            ?>
            </table>
</p>
