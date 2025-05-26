<?php

nterface PayPal {
    public function authorizeTransaction($amount): string;
}
