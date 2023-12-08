# Laravel CRUD Projesi

Bu proje, Laravel framework'ü kullanılarak basit bir CRUD (Create, Read, Update, Delete) uygulamasını içermektedir.

## Kurulum

1. Projeyi bilgisayarınıza klonlayın:

    ```bash
    git clone https://github.com/kullanici_adi/proje-adı.git
    ```

2. Proje dizinine gidin:

    ```bash
    cd proje-adı
    ```

3. Proje bağımlılıklarını yükleyin:

    ```bash
    composer install
    ```

4. `.env` dosyasını oluşturun veya kopyalayın ve veritabanı bağlantı bilgilerinizi ayarlayın:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crudmain
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Veritabanını oluşturun ve tabloları göç edin:

    ```bash
    php artisan migrate
    ```

6. Uygulamayı başlatın:

    ```bash
    php artisan serve
    ```

7. Tarayıcıda [http://localhost:8000](http://localhost:8000) adresine giderek uygulamayı görüntüleyin.

## Kullanım

Uygulama başladığında, CRUD işlemlerini gerçekleştirebileceğiniz basit bir web arayüzüne sahiptir. Lütfen kullanım kılavuzunu inceleyin ve projenizi özelleştirmek için gerekli düzenlemeleri yapın.

## Lisans

Bu proje [MIT lisansı](LICENSE) altında lisanslanmıştır. Detaylar için lütfen lisans dosyasını inceleyin.
