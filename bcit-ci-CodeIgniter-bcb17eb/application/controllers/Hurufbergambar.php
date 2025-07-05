<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hurufbergambar extends CI_Controller {
    public function index() {
        $huruf_bergambar = [
            [ 'huruf_arab' => 'ا', 'huruf_latin' => 'Alif', 'objek_arab' => 'أسد', 'objek_latin' => 'Asad (Singa)', 'gambar' => base_url('assets/huruf/alif.png'), 'audio' => base_url('assets/audio/alif.mp3') ],
            [ 'huruf_arab' => 'ب', 'huruf_latin' => 'Ba', 'objek_arab' => 'بطة', 'objek_latin' => 'Batta (Bebek)', 'gambar' => base_url('assets/huruf/ba.png'), 'audio' => base_url('assets/audio/ba.mp3') ],
            [ 'huruf_arab' => 'ت', 'huruf_latin' => 'Ta', 'objek_arab' => 'تفاح', 'objek_latin' => 'Tuffah (Apel)', 'gambar' => base_url('assets/huruf/ta.png'), 'audio' => base_url('assets/audio/ta.mp3') ],
            [ 'huruf_arab' => 'ث', 'huruf_latin' => 'Tsa', 'objek_arab' => 'ثعلب', 'objek_latin' => 'Tsa'lab (Rubah)', 'gambar' => base_url('assets/huruf/tsa.png'), 'audio' => base_url('assets/audio/tsa.mp3') ],
            [ 'huruf_arab' => 'ج', 'huruf_latin' => 'Jim', 'objek_arab' => 'جمل', 'objek_latin' => 'Jamal (Unta)', 'gambar' => base_url('assets/huruf/jim.png'), 'audio' => base_url('assets/audio/jim.mp3') ],
            [ 'huruf_arab' => 'ح', 'huruf_latin' => 'Ha', 'objek_arab' => 'حصان', 'objek_latin' => 'Hisan (Kuda)', 'gambar' => base_url('assets/huruf/ha.png'), 'audio' => base_url('assets/audio/ha.mp3') ],
            [ 'huruf_arab' => 'خ', 'huruf_latin' => 'Kho', 'objek_arab' => 'خروف', 'objek_latin' => 'Kharuf (Domba)', 'gambar' => base_url('assets/huruf/kho.png'), 'audio' => base_url('assets/audio/kho.mp3') ],
            [ 'huruf_arab' => 'د', 'huruf_latin' => 'Dal', 'objek_arab' => 'ديك', 'objek_latin' => 'Dik (Ayam Jantan)', 'gambar' => base_url('assets/huruf/dal.png'), 'audio' => base_url('assets/audio/dal.mp3') ],
            [ 'huruf_arab' => 'ذ', 'huruf_latin' => 'Dzal', 'objek_arab' => 'ذئب', 'objek_latin' => 'Dzi'b (Serigala)', 'gambar' => base_url('assets/huruf/dzal.png'), 'audio' => base_url('assets/audio/dzal.mp3') ],
            [ 'huruf_arab' => 'ر', 'huruf_latin' => 'Ra', 'objek_arab' => 'رمان', 'objek_latin' => 'Rumman (Delima)', 'gambar' => base_url('assets/huruf/ra.png'), 'audio' => base_url('assets/audio/ra.mp3') ],
            [ 'huruf_arab' => 'ز', 'huruf_latin' => 'Zai', 'objek_arab' => 'زرافة', 'objek_latin' => 'Zarafah (Jerapah)', 'gambar' => base_url('assets/huruf/zai.png'), 'audio' => base_url('assets/audio/zai.mp3') ],
            [ 'huruf_arab' => 'س', 'huruf_latin' => 'Sin', 'objek_arab' => 'سمك', 'objek_latin' => 'Samak (Ikan)', 'gambar' => base_url('assets/huruf/sin.png'), 'audio' => base_url('assets/audio/sin.mp3') ],
            [ 'huruf_arab' => 'ش', 'huruf_latin' => 'Syin', 'objek_arab' => 'شمس', 'objek_latin' => 'Syams (Matahari)', 'gambar' => base_url('assets/huruf/syin.png'), 'audio' => base_url('assets/audio/syin.mp3') ],
            [ 'huruf_arab' => 'ص', 'huruf_latin' => 'Shad', 'objek_arab' => 'صقر', 'objek_latin' => 'Shaqr (Elang)', 'gambar' => base_url('assets/huruf/shad.png'), 'audio' => base_url('assets/audio/shad.mp3') ],
            [ 'huruf_arab' => 'ض', 'huruf_latin' => 'Dhad', 'objek_arab' => 'ضفدع', 'objek_latin' => 'Dhufda' (Katak)', 'gambar' => base_url('assets/huruf/dhad.png'), 'audio' => base_url('assets/audio/dhad.mp3') ],
            [ 'huruf_arab' => 'ط', 'huruf_latin' => 'Tha', 'objek_arab' => 'طاووس', 'objek_latin' => 'Thawus (Merak)', 'gambar' => base_url('assets/huruf/tha.png'), 'audio' => base_url('assets/audio/tha.mp3') ],
            [ 'huruf_arab' => 'ظ', 'huruf_latin' => 'Zha', 'objek_arab' => 'ظبي', 'objek_latin' => 'Zhabi (Rusa)', 'gambar' => base_url('assets/huruf/zha.png'), 'audio' => base_url('assets/audio/zha.mp3') ],
            [ 'huruf_arab' => 'ع', 'huruf_latin' => 'Ain', 'objek_arab' => 'عنب', 'objek_latin' => 'Inab (Anggur)', 'gambar' => base_url('assets/huruf/ain.png'), 'audio' => base_url('assets/audio/ain.mp3') ],
            [ 'huruf_arab' => 'غ', 'huruf_latin' => 'Ghain', 'objek_arab' => 'غزال', 'objek_latin' => 'Ghazal (Kijang)', 'gambar' => base_url('assets/huruf/ghain.png'), 'audio' => base_url('assets/audio/ghain.mp3') ],
            [ 'huruf_arab' => 'ف', 'huruf_latin' => 'Fa', 'objek_arab' => 'فيل', 'objek_latin' => 'Fil (Gajah)', 'gambar' => base_url('assets/huruf/fa.png'), 'audio' => base_url('assets/audio/fa.mp3') ],
            [ 'huruf_arab' => 'ق', 'huruf_latin' => 'Qaf', 'objek_arab' => 'قرد', 'objek_latin' => 'Qird (Monyet)', 'gambar' => base_url('assets/huruf/qaf.png'), 'audio' => base_url('assets/audio/qaf.mp3') ],
            [ 'huruf_arab' => 'ك', 'huruf_latin' => 'Kaf', 'objek_arab' => 'كلب', 'objek_latin' => 'Kalb (Anjing)', 'gambar' => base_url('assets/huruf/kaf.png'), 'audio' => base_url('assets/audio/kaf.mp3') ],
            [ 'huruf_arab' => 'ل', 'huruf_latin' => 'Lam', 'objek_arab' => 'ليمون', 'objek_latin' => 'Laimun (Lemon)', 'gambar' => base_url('assets/huruf/lam.png'), 'audio' => base_url('assets/audio/lam.mp3') ],
            [ 'huruf_arab' => 'م', 'huruf_latin' => 'Mim', 'objek_arab' => 'موز', 'objek_latin' => 'Mauz (Pisang)', 'gambar' => base_url('assets/huruf/mim.png'), 'audio' => base_url('assets/audio/mim.mp3') ],
            [ 'huruf_arab' => 'ن', 'huruf_latin' => 'Nun', 'objek_arab' => 'نمر', 'objek_latin' => 'Nimr (Macan)', 'gambar' => base_url('assets/huruf/nun.png'), 'audio' => base_url('assets/audio/nun.mp3') ],
            [ 'huruf_arab' => 'و', 'huruf_latin' => 'Wau', 'objek_arab' => 'وردة', 'objek_latin' => 'Wardah (Bunga)', 'gambar' => base_url('assets/huruf/wau.png'), 'audio' => base_url('assets/audio/wau.mp3') ],
            [ 'huruf_arab' => 'ه', 'huruf_latin' => 'Ha', 'objek_arab' => 'هدهد', 'objek_latin' => 'Hudhud (Burung Hudhud)', 'gambar' => base_url('assets/huruf/ha2.png'), 'audio' => base_url('assets/audio/ha2.mp3') ],
            [ 'huruf_arab' => 'ء', 'huruf_latin' => 'Hamzah', 'objek_arab' => 'ماء', 'objek_latin' => 'Ma' (Air)', 'gambar' => base_url('assets/huruf/hamzah.png'), 'audio' => base_url('assets/audio/hamzah.mp3') ],
            [ 'huruf_arab' => 'ي', 'huruf_latin' => 'Ya', 'objek_arab' => 'يد', 'objek_latin' => 'Yad (Tangan)', 'gambar' => base_url('assets/huruf/ya.png'), 'audio' => base_url('assets/audio/ya.mp3') ],
        ];
        $data['huruf_bergambar'] = $huruf_bergambar;
        $this->load->view('huruf_bergambar_view', $data);
    }
} 