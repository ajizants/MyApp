//post show

import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import PostCard from "@/Components/PostCard";
import { Head, usePage } from "@inertiajs/react";

const Post = ({ auth, posts }) => {
    const { title } = usePage().props;
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Posts
                </h2>
            }
        >
            <Head title={title} />
            <div className="py-6">
                <div className="max-w-3xl mx-auto">
                    {posts.map((post) => (
                        <PostCard key={post.id} post={post} />
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
};
export default Post;
