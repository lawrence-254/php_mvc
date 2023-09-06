<nav>
    <a class="<?= urlIs('/') ? 'yes' : 'no'; ?>" href="/">Home</a>
    <a class="<?= urlIs('/notes') ? 'yes' : 'no'; ?>" href="/notes">Notes</a>
    <a class="<?= urlIs('/about') ? 'yes' : 'no'; ?>" href="/about">About</a>
    <a class="<?= urlIs('/contact') ? 'yes' : 'no'; ?>" href="/contact">Contact</a>
</nav>