<?php

/**
 * This file is part of the Sylius package.
 *
 *  (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\ShopApiPlugin\Factory\Cart;

use Sylius\Component\Core\Model\OrderInterface;
use Sylius\ShopApiPlugin\View\Cart\CartSummaryView;

interface CartViewFactoryInterface
{
    public function create(OrderInterface $cart, string $localeCode): CartSummaryView;
}
