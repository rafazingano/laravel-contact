<?PHP

namespace ConfrariaWeb\Contact\Services;

use ConfrariaWeb\Contact\Contracts\ContactTypeContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class ContactTypeService
{
    use ServiceTrait;

    public function __construct(ContactTypeContract $type)
    {
        $this->obj = $type;
    }

}
