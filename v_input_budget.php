<html>
    <head>
        <title>Program Test CRUD</title>
    </head>
    <body>
        <table>
  
            <tbody>
                <h2><?php echo $type;?></h2>
                <?php echo form_open('pos_budget/post'); ?>
                <?php if ($type=="EDIT"){ 
                    echo form_hidden('id', $this->input->get('budget'));
                    }
                    ?>
                <tr>
                    <td>Alokasi</td>
                    <td><input type="text" name="alokasi" value="<?php if ($type=="EDIT"){echo $budget[0]->alokasi;};?>"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="year" name="tahun" value="<?php if ($type=="EDIT"){echo $budget[0]->tahun;};?>"></td>
                </tr>
                <tr>
                    <td>Bulan</td>
                    <td><input type="text" name="bulan" value="<?php if ($type=="EDIT"){echo $bulan[0]->bulan;};?>"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="number" name="amount" value="<?php if ($type=="EDIT"){echo $amount[0]->amount;};?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="<?php echo $type;?>"></td>
                </tr>
                <?php echo form_close();?>
            </tbody>
        </table>
    </body>
</html>