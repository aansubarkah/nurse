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
            <p><?php if(isset($level['Level']['name'])) echo $level['Level']['name']; ?></p>
            <footer><a href="#">Pangkat</a></footer>
        </blockquote>
        <blockquote>
            <p><?php if(isset($positionLevel['Positionlevel']['name'])) echo $positionLevel['Positionlevel']['name']; ?></p>
            <footer><a href="#">Jabatan</a></footer>
        </blockquote>
        <blockquote>
            <p><?php if(isset($departement['Departement']['name'])) echo $departement['Departement']['name']; ?></p>
            <footer><a href="#">Unit Kerja</a></footer>
        </blockquote>
        <blockquote>
            <p><?php if(isset($chief['User']['name'])) echo $chief['User']['name']; ?></p>
            <footer><a href="#">Atasan</a></footer>
        </blockquote>
    </div>
</div>