<?= $this->include('template/header'); ?> 

<article class="entry"> 
    <h2><?= $artikel['judul']; ?></h2> 
    
    <p class="meta">
        <small>Kategori: <b><?= $artikel['nama_kategori'] ?? 'Tanpa Kategori'; ?></b></small>
    </p>

    <?php if (!empty($artikel['gambar'])): ?>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?= $artikel['judul']; ?>"> 
    <?php endif; ?>

    <p><?= $artikel['isi']; ?></p> 
</article> 

<?= $this->include('template/footer'); ?>