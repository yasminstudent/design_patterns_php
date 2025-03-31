<?php

namespace DesignPattern\Behavioral\PaymentMethod\Enums;

enum PaymentMethodEnum: string
{
    case CREDIT_CARD = 'credit_card';
    case DEBIT_CARD = 'debit_card';
    case PIX = 'pix';
    case BOLETO = 'boleto';
    case PAYPAL = 'paypal';
    case BANK_TRANSFER = 'bank_transfer';
}
