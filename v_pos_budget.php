<html>
    <head>
        <title>Program Test CRUD</title>
    </head>
    <style>
        th,td,table,thead,tbody,tr{
            border:1px solid #000;
        }
    </style>
    <body>

        <table>
            <thead>
                <th>No</th>
                <th>Alokasi</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Amount</th>
                <th>Kontrol</th>
            </thead>
            <tbody>
                <h2>Program Test CRUD</h2>
                <a href="<?php echo site_url('pos_budget/input');?>">Input</a>
                <?php
                $no = 1;
                foreach($pos_budget as $value)
                {
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $value->alokasi;?></td>
                    <td><?= $value->tahun;?></td>
                    <td><?= $value->bulan;?></td>
                    <td><?= $value->amount;?></td>
                    <td><a href="<?= site_url("pos_budget/edit")."?budget=".$value->id;?>">edit</a>|<a href="<?= site_url("pos_budget/delete")."?budget=".$value->id;?>">delete</a> </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>