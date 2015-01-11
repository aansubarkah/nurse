<?php
/**
 * @var View $this
 */
$sex = 'Laki-Laki';
if ($user['User']['sex'] == 0) $sex = 'Perempuan';
?>
<div class="row">
    <div class="col-md-5">
        <dl class="dl-horizontal">
            <dt><strong><?php echo $user['User']['fullname']; ?></strong></dt>
            <dd>
                <small>Nama Lengkap</small>
            </dd>
            <dt><strong><?php echo $sex; ?></strong></dt>
            <dd>
                <small>Jenis Kelamin</small>
            </dd>
            <dt><strong><?php echo $user['User']['number']; ?></strong></dt>
            <dd>
                <small>NIP</small>
            </dd>
            <dt><strong><?php echo $user['User']['cardnumber']; ?></strong></dt>
            <dd>
                <small>Nomor Karpeg</small>
            </dd>
            <dt><strong><?php echo $user['User']['birthdate']; ?></strong></dt>
            <dd>
                <small>Tanggal Lahir</small>
            </dd>
            <dt><strong><?php echo $user['User']['birthplace']; ?></strong></dt>
            <dd>
                <small>Tempat Kelahiran</small>
            </dd>
        </dl>
        <p class="text-right">
            <small>
                <?php
                echo $this->Html->link('Ubah Informasi Dasar', array(
                    'controller' => 'users',
                    'action' => 'basicinfo'
                ));
                ?>
            </small>
        </p>
    </div>
    <div class="col-md-7">
        <blockquote>
            <p><?php echo $positionLevel['Positionlevel']['name']; ?></p>
            <footer><a href="#">Jabatan</a></footer>
        </blockquote>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>
</div>