<?PHP

namespace ConfrariaWeb\Contact\Repositories;

use ConfrariaWeb\Contact\Models\Contact;
use ConfrariaWeb\Contact\Contracts\ContactContract;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class ContactEloquent implements ContactContract
{

    use RepositoryTrait;

    function __construct(Contact $contact)
    {
        $this->obj = $contact;
    }

}
