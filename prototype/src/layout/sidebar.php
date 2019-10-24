<aside id="sidebar" class="sidebar">
    <section class="sidebar-nav sidebar-top">
        <?php include './layout/login.php' ?>
    </section>
    <ul class="list-group">
        <li class="list-group-item">
            Dark Mode
            <label class="switch">
                <input type="checkbox" class="default" onclick="myFunction()">
                <span class="slider-dark round"></span>
            </label>
        </li>
    </ul>
    <section class="sidebar-nav">
        <ul>
            <li>
                <img src="./img/icon/home.png" alt="Home Icon">
                <span>Beranda</span>
                <a href="index.php" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/trending.png" alt="Trending Icon">
                <span>Trending</span>
                <a href="subpage.php" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/video.png" alt="Video Icon">
                <span>Video</span>
                <a href="video.php" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/album.png" alt="Photo Album Icon">
                <span>Photo Album</span>
                <a href="javascript:;" class="url"></a>
            </li>
        </ul>
    </section>
    <section class="sidebar-nav">
        <h6>Kategori</h6>
        <ul>
            <li>
                <span>Berita</span>
                <a href="subpage.php" class="url"></a>
            </li>
            <li>
                <span>Entertaiment</span>
                <a href="subpage.php" class="url"></a>
            </li>
            <li>
                <span>Olahraga</span>
                <a href="subpage.php" class="url"></a>
            </li>
            <li>
                <span>Hukum</span>
                <a href="subpage.php" class="url"></a>
            </li>
            <li>
                <span>Pojok Aspirasi</span>
                <a href="subpage.php" class="url"></a>
            </li>
        </ul>
    </section>
    <section class="sidebar-nav sidebar-bottom">
        <h6>
            <a class="btn-collapse" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Tentang Kami
                <img src="./img/icon/arrow_down.png" alt="Arrow Down">
            </a>
        </h6>
        <ul class="collapse" id="collapseExample">
            <li>
                <span>Hidup di Kantor Kami</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <span>Ketentuan & Kebijakan Privacy</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <span>Bantuan</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <span>Panduan Pojok Aspirasi</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <span>Pamer (Iklan)</span>
                <a href="javascript:;" class="url"></a>
            </li>
        </ul>
    </section>
    <section class="sidebar-nav">
        <h6>Sosial Media</h6>
        <ul>
            <li>
                <img src="./img/icon/fb.png" alt="Facebook Icon">
                <span>Facebook</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/instagram.png" alt="Instagram Icon">
                <span>Instagram</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/twitter.png" alt="Twitter Icon">
                <span>Twitter</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/youtube.png" alt="Youtube Icon">
                <span>Youtube</span>
                <a href="javascript:;" class="url"></a>
            </li>
            <li>
                <img src="./img/icon/linkedin.png" alt="Linked In Icon">
                <span>Linked In</span>
                <a href="javascript:;" class="url"></a>
            </li>
        </ul>
    </section>
    <section class="sidebar-nav">
        <?php include './layout/footer.php' ?>
    </section>
</aside>