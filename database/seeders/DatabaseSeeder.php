<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Siswa::create(['nama' => 'Abd. Rahman M. Sahrain', 'kode' => 'arms1',]);
        Siswa::create(['nama' => 'Anisa Dwi Putri Hairudin', 'kode' => 'adph2',]);
        Siswa::create(['nama' => 'Delastri Y. Marwae', 'kode' => 'dlym3',]);
        Siswa::create(['nama' => 'Dirya Pratama Idrus', 'kode' => 'dpis4',]);
        Siswa::create(['nama' => 'Faisal Usman', 'kode' => 'fsum5',]);
        Siswa::create(['nama' => 'Fajriah Mulia Rifai', 'kode' => 'fjmr6',]);
        Siswa::create(['nama' => 'Febrianti Thaib', 'kode' => 'fbrt7',]);
        Siswa::create(['nama' => 'Fidya Rauf', 'kode' => 'fdyr8',]);
        Siswa::create(['nama' => 'Fitrah Ramadan Panto', 'kode' => 'frmp9',]);
        Siswa::create(['nama' => 'Indah Sintia Poloalo', 'kode' => 'ispl10',]);
        Siswa::create(['nama' => 'Moh. Ghalib Akmal Mointi', 'kode' => 'mgam11',]);
        Siswa::create(['nama' => 'Muh. Bilal Amirullah', 'kode' => 'mbamh12',]);
        Siswa::create(['nama' => 'Najiah R. Manyoe', 'kode' => 'njrme13',]);
        Siswa::create(['nama' => 'Prabudi Syafriatama Ahmad', 'kode' => 'prsa14',]);
        Siswa::create(['nama' => 'Putra Syahbana Pakaya', 'kode' => 'psbk15',]);
        Siswa::create(['nama' => 'Seswita Dwi Putri', 'kode' => 'swdp16',]);
        Siswa::create(['nama' => 'Stevani Oktavia Timbuli', 'kode' => 'stot17',]);
        Siswa::create(['nama' => 'Vangly Djou', 'kode' => 'vnyd18',]);
        Siswa::create(['nama' => 'Al Alim Adam', 'kode' => 'aldm1',]);
        Siswa::create(['nama' => 'Aman Suleman', 'kode' => 'asen2',]);
        Siswa::create(['nama' => 'Amelda Ghaib', 'kode' => 'algb3',]);
        Siswa::create(['nama' => 'Fadila Pradita S. Lantu', 'kode' => 'fpsln4',]);
        Siswa::create(['nama' => 'Fadly Djou', 'kode' => 'fdyj5',]);
        Siswa::create(['nama' => 'Falen Lantu', 'kode' => 'flntu6',]);
        Siswa::create(['nama' => 'Firman Yunus', 'kode' => 'frmy7',]);
        Siswa::create(['nama' => 'Marsya Amelia Maksum', 'kode' => 'maua8',]);
        Siswa::create(['nama' => 'Moh. Dwi Arjuna Naue', 'kode' => 'mdan9',]);
        Siswa::create(['nama' => 'Moh. Iqbal Mootalu', 'kode' => 'matb10',]);
        Siswa::create(['nama' => 'Muhammad Revail Acep', 'kode' => 'mrac11',]);
        Siswa::create(['nama' => 'Mutia Arsyat', 'kode' => 'mary12',]);
        Siswa::create(['nama' => 'Noval Khairul', 'kode' => 'nkhr13',]);
        Siswa::create(['nama' => 'Raditya Tambung', 'kode' => 'rtmb14',]);
        Siswa::create(['nama' => 'Rivaldi Dika', 'kode' => 'rvdka15',]);
        Siswa::create(['nama' => 'Sri Lola Artaja ', 'kode' => 'slatj16',]);
    }
}