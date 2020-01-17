<?PHP

namespace ConfrariaWeb\Contact\Services;

use ConfrariaWeb\Contact\Contracts\ContactContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class ContactService
{
    use ServiceTrait;

    public function __construct(ContactContract $contact)
    {
        $this->obj = $contact;
    }

}
