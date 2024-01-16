<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><i class="fas fa-users"></i> Data Customer</h1>
    </div>
    <div class="section-body">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>User</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php $n = 1; foreach ($customer as $mhs) : ?>
            <tr>
              <!-- <p Type=hidden;> </p> --> <!-- Buat simpan nilai primary key, bang -->
              <td><?= $n < 10 ? '0' . $n++ : $n++; ?></td>
              <td><?= $mhs['nama']; ?></td>
              <td><?= $mhs['email']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>

<?= $this->include('admin/partial/footer') ?>
