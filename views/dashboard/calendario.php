<div class="escolhaMes">
    <span>Mês:</span>
    <select name="mes" id="mes">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <option value="<?= $i;?>" <?=($mes_atual == $i)?'selected':'';?>><?= Data::getMesCompleto($i); ?></option>
        <?php endfor; ?>
    </select>
    <select name="ano" id="ano">
        <?php for ($i = 2020; $i <= date('Y'); $i++) : ?>
            <option value="<?= $i;?>" <?=($ano_atual == $i)?'selected':'';?>><?=$i;?></option>
        <?php endfor; ?>
    </select>
</div>
<table class="tabelaCalendario">
    <tr>
        <th>D</th>
        <th>S</th>
        <th>T</th>
        <th>Q</th>
        <th>Q</th>
        <th>S</th>
        <th>S</th>
    </tr>
    <?php for ($l = 0; $l < $linhas; $l++) : ?>
        <tr>
            <?php for ($q = 0; $q < 7; $q++) : ?>
                <?php
                $t = strtotime(($q + ($l * 7)) . ' days', strtotime($data_inicio));
                $w = date('Y-m-d', $t);
                ?>
                <td>
                    <div class="dia <?= (date('Y-m-d') == date('Y-m-d', $t)) ? 'ativo' : ''; ?> <?= (date('Y-m-d') > date('Y-m-d', $t)) ? 'inativo' : ''; ?>" data-date="<?= date('Y-m-d', $t); ?>">
                        <?php
                        echo date('d', $t);
                        $w = strtotime($w);
                        ?>
                    </div>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>