<?php namespace Tests\Traits;

use Faker\Factory as Faker;
use App\Models\Transaction;
use App\Repositories\TransactionRepository;

trait MakeTransactionTrait
{
    /**
     * Create fake instance of Transaction and save it in database
     *
     * @param array $transactionFields
     * @return Transaction
     */
    public function makeTransaction($transactionFields = [])
    {
        /** @var TransactionRepository $transactionRepo */
        $transactionRepo = \App::make(TransactionRepository::class);
        $theme = $this->fakeTransactionData($transactionFields);
        return $transactionRepo->create($theme);
    }

    /**
     * Get fake instance of Transaction
     *
     * @param array $transactionFields
     * @return Transaction
     */
    public function fakeTransaction($transactionFields = [])
    {
        return new Transaction($this->fakeTransactionData($transactionFields));
    }

    /**
     * Get fake data of Transaction
     *
     * @param array $transactionFields
     * @return array
     */
    public function fakeTransactionData($transactionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'description' => $fake->text,
            'price' => $fake->randomDigitNotNull,
            'sender_email' => $fake->word,
            'sender_phone' => $fake->word,
            'recipient_phone' => $fake->word,
            'recipient_email' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $transactionFields);
    }
}
