<?PHP

namespace ConfrariaWeb\Contact\Repositories;

use ConfrariaWeb\Contact\Contracts\ContactTypeContract;
use ConfrariaWeb\Contact\Models\ContactType;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class ContactTypeRepository implements ContactTypeContract
{
    use RepositoryTrait;

    function __construct(ContactType $type)
    {
        $this->obj = $type;
    }
}
