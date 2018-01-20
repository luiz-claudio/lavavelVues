<?php

namespace App\Console\Commands;

use App\Entities\ControlImport;
use App\Entities\Products;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mystore:importproducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import csv products list ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $file = ControlImport::all()->where('status', '=', 'waiting');

        if (!empty($file)) {

        foreach ($file as $value) {

                $url = '/var/www/html/Manager/storage/app/' . $value->filecsv;
                $arquivo = fopen($url, 'r');
                $count = 0;

                while (!feof($arquivo)) {
                    $linha = fgets($arquivo, 1024);
                    $dados = explode(',', $linha);

                    if ($count >= 1 and !empty($dados[2])) {
                        $product = new Products();
                        $product->image = $dados[0];
                        $product->id_category = $dados[1];
                        $product->name = $dados[2];
                        $product->description = $dados[3];
                        $product->price = (double)$dados[4];
                        $product->save();
                    }
                    $count++;
                }

                $controlImport = ControlImport::find($value->id);
                $controlImport->status = 'ok';
                $controlImport->save();

                fclose($arquivo);

            }

                $user = User::all();

                foreach ($user as $a) {


                    Mail::raw("your import was completed", function ($message) use ($a) {

                        $message->from('luizclaudiosiqueira2@gmail.com');

                        $message->to($a->email)->subject('your import was completed');

                    });

                }





        }


               $this->info('your import was completed');
    }
}
